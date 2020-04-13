<?php

namespace Illuminate\Contracts\Queue;

interface Monitor
{
    /**
     * Subscribe a callback to be executed on every iteration through the queue loop.
     *
     * @param  mixed  $callback
     * @return void
     */
    public function looping($callback);

    /**
     * Subscribe a callback to be executed when a job fails after the maximum amount of retries.
     *
     * @param  mixed  $callback
     * @return void
     */
    public function failing($callback);

    /**
     * Subscribe a callback to be executed when a daemon queue is stopping.
     *
     * @param  mixed  $callback
     * @return void
     */
    public function stopping($callback);
}
