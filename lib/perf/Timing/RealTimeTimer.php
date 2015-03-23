<?php

namespace perf\Timing;

/**
 *
 *
 */
class RealTimeTimer implements Timer
{

    /**
     *
     *
     * @var Clock
     */
    private $clock;

    /**
     *
     *
     * @var float
     */
    private $startMicrotime;

    /**
     *
     *
     * @var bool
     */
    private $started = false;

    /**
     * Constructor.
     *
     * @param null|Clock $clock
     * @return void
     */
    public function __construct(Clock $clock = null)
    {
        if (null === $clock) {
            $this->clock = new RealTimeClock();
        } else {
            $this->clock = $clock;
        }
    }

    /**
     *
     *
     * @return void
     */
    public function start()
    {
        $now = $this->now();

        if ($this->started) {
            throw new \RuntimeException('Timer already started.');
        }

        $this->startMicrotime = $now;
        $this->started        = true;
    }

    /**
     *
     *
     * @return void
     */
    public function getElapsed()
    {
        $now = $this->now();

        if (!$this->started) {
            throw new \RuntimeException('Timer not started.');
        }

        return ($now - $this->startMicrotime);
    }

    /**
     *
     *
     * @return void
     */
    public function restart()
    {
        $this->startMicrotime = $this->now();
        $this->started        = true;
    }

    /**
     *
     *
     * @return float
     */
    public function getElapsedAndRestart()
    {
        $now = $this->now();

        if (!$this->started) {
            throw new \RuntimeException('Timer not started.');
        }

        $elapsed = ($now - $this->startMicrotime);

        $this->startMicrotime = $now;

        return $elapsed;
    }

    /**
     *
     *
     * @return void
     */
    public function stop()
    {
        $this->started = false;
    }

    /**
     *
     *
     * @return float
     */
    private function now()
    {
        return $this->clock->getMicrotime();
    }
}
