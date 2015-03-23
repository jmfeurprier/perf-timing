<?php

namespace perf\Timing;

/**
 *
 *
 */
interface Timer
{

    /**
     *
     *
     * @return void
     */
    public function start();

    /**
     *
     *
     * @return void
     */
    public function getElapsed();

    /**
     *
     *
     * @return void
     */
    public function restart();

    /**
     *
     *
     * @return float
     */
    public function getElapsedAndRestart();

    /**
     *
     *
     * @return void
     */
    public function stop();
}
