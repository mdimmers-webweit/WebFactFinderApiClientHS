<?php

namespace GuzzleHttp6;

use GuzzleHttp6\Promise\EachPromise;
use GuzzleHttp6\Promise\PromiseInterface;
use GuzzleHttp6\Promise\PromisorInterface;
use Psr\Http\Message\RequestInterface;

/**
 * Sends an iterator of requests concurrently using a capped pool size.
 *
 * The pool will read from an iterator until it is cancelled or until the
 * iterator is consumed. When a request is yielded, the request is sent after
 * applying the "request_options" request options (if provided in the ctor).
 *
 * When a function is yielded by the iterator, the function is provided the
 * "request_options" array that should be merged on top of any existing
 * options, and the function MUST then return a wait-able promise.
 */
class Pool implements PromisorInterface
{
    /** @var EachPromise */
    private $each;

    /**
     * @param ClientInterface $client   client used to send the requests
     * @param array|\Iterator $requests requests or functions that return
     *                                  requests to send concurrently
     * @param array           $config   Associative array of options
     *                                  - concurrency: (int) Maximum number of requests to send concurrently
     *                                  - options: Array of request options to apply to each request.
     *                                  - fulfilled: (callable) Function to invoke when a request completes.
     *                                  - rejected: (callable) Function to invoke when a request is rejected.
     */
    public function __construct(
        ClientInterface $client,
        $requests,
        array $config = []
    ) {
        // Backwards compatibility.
        if (isset($config['pool_size'])) {
            $config['concurrency'] = $config['pool_size'];
        } elseif (!isset($config['concurrency'])) {
            $config['concurrency'] = 25;
        }

        if (isset($config['options'])) {
            $opts = $config['options'];
            unset($config['options']);
        } else {
            $opts = [];
        }

        $iterable = \GuzzleHttp6\Promise\iter_for($requests);
        $requests = function () use ($iterable, $client, $opts) {
            foreach ($iterable as $key => $rfn) {
                if ($rfn instanceof RequestInterface) {
                    yield $key => $client->sendAsync($rfn, $opts);
                } elseif (\is_callable($rfn)) {
                    yield $key => $rfn($opts);
                } else {
                    throw new \InvalidArgumentException('Each value yielded by '
                        . 'the iterator must be a Psr7\Http\Message\RequestInterface '
                        . 'or a callable that returns a promise that fulfills '
                        . 'with a Psr7\Message\Http\ResponseInterface object.');
                }
            }
        };

        $this->each = new EachPromise($requests(), $config);
    }

    /**
     * @return PromiseInterface
     */
    public function promise()
    {
        return $this->each->promise();
    }

    /**
     * Sends multiple requests concurrently and returns an array of responses
     * and exceptions that uses the same ordering as the provided requests.
     *
     * IMPORTANT: This method keeps every request and response in memory, and
     * as such, is NOT recommended when sending a large number or an
     * indeterminate number of requests concurrently.
     *
     * @param ClientInterface $client   Client used to send the requests
     * @param array|\Iterator $requests requests to send concurrently
     * @param array           $options  Passes through the options available in
     *                                  {@see GuzzleHttp6\Pool::__construct}
     *
     * @throws \InvalidArgumentException if the event format is incorrect
     *
     * @return array returns an array containing the response or an exception
     *               in the same order that the requests were sent
     */
    public static function batch(
        ClientInterface $client,
        $requests,
        array $options = []
    ) {
        $res = [];
        self::cmpCallback($options, 'fulfilled', $res);
        self::cmpCallback($options, 'rejected', $res);
        $pool = new static($client, $requests, $options);
        $pool->promise()->wait();
        \ksort($res);

        return $res;
    }

    /**
     * Execute callback(s)
     */
    private static function cmpCallback(array &$options, $name, array &$results): void
    {
        if (!isset($options[$name])) {
            $options[$name] = function ($v, $k) use (&$results): void {
                $results[$k] = $v;
            };
        } else {
            $currentFn = $options[$name];
            $options[$name] = function ($v, $k) use (&$results, $currentFn): void {
                $currentFn($v, $k);
                $results[$k] = $v;
            };
        }
    }
}
