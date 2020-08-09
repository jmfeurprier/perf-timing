<?php

namespace perf\Timing;

use DateTimeInterface;

interface ClockInterface
{
    public function getDateTime(): DateTimeInterface;

    public function getDateTimeString(): string;

    public function getDateString(): string;

    public function getTimeString(): string;

    public function getTimestamp(): int;

    public function getMicrotime(): float;
}
