<?php

namespace GuzzleHttp6;

use GuzzleHttp6\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Middleware that retries requests based on the boolean result of
 * invoking the provided "decider" function.
 */
class RetryMiddleware
{
    /** @var callable */
    private $nextHandler;

    /** @var callable */
    private $decider;

    /** @var callable */
    private $delay;

    /**
     * @param callable $decider     function that accepts the number of retries,
     *                              a request, [response], and [exception] and
     *                              returns true if the request is to be
     *                              retried
     * @param callable $nextHandler next handler to invoke
     * @param callable $delay       function that accepts the number of retries
     *                              and [response] and returns the number of
     *                              milliseconds to delay
     */
    public function __construct(
        callable $decider,
        callable $nextHandler,
        ?callable $delay = null
    ) {
        $this->decider = $decider;
        $this->nextHandler = $nextHandler;
        $this->delay = $delay ?: __CLASS__ . '::exponentialDelay';
    }

    /**
     * @return PromiseInterface
     */
    public function __invoke(RequestInterface $request, array $options)
    {
        if (!isset($options['retries'])) {
            $options['retries'] = 0;
        }

        $fn = $this->nextHandler;

        return $fn($request, $options)
            ->then(
                $this->onFulfilled($request, $options),
                $this->onRejected($request, $options)
            );
    }

    /**
     * Default exponential backoff delay function.
     *
     * @param int $retries
     *
     * @return int milliseconds
     */
    public static function exponentialDelay($retries)
    {
        return (int) \pow(2, $retries - 1) * 1000;
    }

    /**
     * Execute fulfilled closure
     */
    private function onFulfilled(RequestInterface $req, array $options)
    {
        return function ($value) use ($req, $options) {
            if (!\call_user_func(
                $this->decider,
                $options['retries'],
                $req,
                $value,
                null
            )) {
                return $value;
            }

            return $this->doRetry($req, $options, $value);
        };
    }

    /**
     * Execute rejected closure
     *
     * @return callable
     */
    private function onRejected(RequestInterface $req, array $options)
    {
        return function ($reason) use ($req, $options) {
            if (!\call_user_func(
                $this->decider,
                $options['retries'],
                $req,
                null,
                $reason
            )) {
                return \GuzzleHttp6\Promise\rejection_for($reason);
            }

            return $this->doRetry($req, $options);
        };
    }

    /**
     * @return self
     */
    private function doRetry(RequestInterface $request, array $options, ?ResponseInterface $response = null)
    {
        $options['delay'] = \call_user_func($this->delay, ++$options['retries'], $response);

        return $this($request, $options);
    }
}
