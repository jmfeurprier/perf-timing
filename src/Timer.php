<?php

namespace perf\Timing;

class Timer implements TimerInterface
{
    private const STATUS_READY   = 'READY';
    private const STATUS_STOPPED = 'STOPPED';
    private const STATUS_STARTED = 'STARTED';

    private ClockInterface $clock;

    private string $status = self::STATUS_READY;

    private ?float $startMicrotime = null;

    private float $elapsedSeconds = 0.0;

    public function __construct(ClockInterface $clock = null)
    {
        $this->clock = $clock ?? new Clock();
    }

    public function start(): void
    {
        $now = $this->now();

        $this->startMicrotime = $now;
        $this->status         = self::STATUS_STARTED;
    }

    public function stop(): void
    {
        $now = $this->now();

        if (self::STATUS_STARTED === $this->status) {
            $this->elapsedSeconds += ($now - $this->startMicrotime);
            $this->status         = self::STATUS_STOPPED;
        }
    }

    public function reset(): void
    {
        $this->startMicrotime = null;
        $this->elapsedSeconds = 0.0;
        $this->status         = self::STATUS_READY;
    }

    public function restart(): void
    {
        $now = $this->now();

        $this->startMicrotime = $now;
        $this->elapsedSeconds = 0.0;
        $this->status         = self::STATUS_STARTED;
    }

    public function getElapsed(): float
    {
        $now = $this->now();

        if (self::STATUS_STARTED === $this->status) {
            return $this->elapsedSeconds + ($now - $this->startMicrotime);
        }

        return $this->elapsedSeconds;
    }

    private function now(): float
    {
        return $this->clock->getMicrotime();
    }
}
