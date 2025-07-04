<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace GuzzleHttp6\Promise;

/**
 * Creates a promise that is resolved using a generator that yields values or
 * promises (somewhat similar to C#'s async keyword).
 *
 * When called, the coroutine function will start an instance of the generator
 * and returns a promise that is fulfilled with its final yielded value.
 *
 * Control is returned back to the generator when the yielded promise settles.
 * This can lead to less verbose code when doing lots of sequential async calls
 * with minimal processing in between.
 *
 *     use GuzzleHttp6\Promise;
 *
 *     function createPromise($value) {
 *         return new Promise\FulfilledPromise($value);
 *     }
 *
 *     $promise = Promise\coroutine(function () {
 *         $value = (yield createPromise('a'));
 *         try {
 *             $value = (yield createPromise($value . 'b'));
 *         } catch (\Exception $e) {
 *             // The promise was rejected.
 *         }
 *         yield $value . 'c';
 *     });
 *
 *     // Outputs "abc"
 *     $promise->then(function ($v) { echo $v; });
 *
 * @param callable $generatorFn generator function to wrap into a promise
 *
 * @return Promise
 *
 * @see https://github.com/petkaantonov/bluebird/blob/master/API.md#generators inspiration
 */
final class Coroutine implements PromiseInterface
{
    /**
     * @var PromiseInterface|null
     */
    private $currentPromise;

    /**
     * @var \Generator
     */
    private $generator;

    /**
     * @var Promise
     */
    private $result;

    public function __construct(callable $generatorFn)
    {
        $this->generator = $generatorFn();
        $this->result = new Promise(function (): void {
            while (isset($this->currentPromise)) {
                $this->currentPromise->wait();
            }
        });
        $this->nextCoroutine($this->generator->current());
    }

    public function then(
        ?callable $onFulfilled = null,
        ?callable $onRejected = null
    ) {
        return $this->result->then($onFulfilled, $onRejected);
    }

    public function otherwise(callable $onRejected)
    {
        return $this->result->otherwise($onRejected);
    }

    public function wait($unwrap = true)
    {
        return $this->result->wait($unwrap);
    }

    public function getState()
    {
        return $this->result->getState();
    }

    public function resolve($value): void
    {
        $this->result->resolve($value);
    }

    public function reject($reason): void
    {
        $this->result->reject($reason);
    }

    public function cancel(): void
    {
        $this->currentPromise->cancel();
        $this->result->cancel();
    }

    /**
     * @internal
     */
    public function _handleSuccess($value): void
    {
        unset($this->currentPromise);
        try {
            $next = $this->generator->send($value);
            if ($this->generator->valid()) {
                $this->nextCoroutine($next);
            } else {
                $this->result->resolve($value);
            }
        } catch (\Exception $exception) {
            $this->result->reject($exception);
        } catch (\Throwable $throwable) {
            $this->result->reject($throwable);
        }
    }

    /**
     * @internal
     */
    public function _handleFailure($reason): void
    {
        unset($this->currentPromise);
        try {
            $nextYield = $this->generator->throw(exception_for($reason));
            // The throw was caught, so keep iterating on the coroutine
            $this->nextCoroutine($nextYield);
        } catch (\Exception $exception) {
            $this->result->reject($exception);
        } catch (\Throwable $throwable) {
            $this->result->reject($throwable);
        }
    }

    private function nextCoroutine($yielded): void
    {
        $this->currentPromise = promise_for($yielded)
            ->then([$this, '_handleSuccess'], [$this, '_handleFailure']);
    }
}
