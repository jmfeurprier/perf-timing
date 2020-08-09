<?php

namespace perf\Timing;

use DateTime;
use DateTimeInterface;

class Clock implements ClockInterface
{
    public function getDateTime(): DateTimeInterface
    {
        return new DateTime();
    }

    public function getDateTimeString(): string
    {
        return $this->getDateTime()->format('Y-m-d H:i:s');
    }

    public function getDateString(): string
    {
        return $this->getDateTime()->format('Y-m-d');
    }

    public function getTimeString(): string
    {
        return $this->getDateTime()->format('H:i:s');
    }

    public function getTimestamp(): int
    {
        return $this->getDateTime()->getTimestamp();
    }

    public function getMicrotime(): float
    {
        return microtime(true);
    }
}
