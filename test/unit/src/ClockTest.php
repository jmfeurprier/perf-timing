<?php

namespace perf\Timing;

use DateTime;
use PHPUnit\Framework\TestCase;

class ClockTest extends TestCase
{
    private Clock $clock;

    protected function setUp(): void
    {
        $this->clock = new Clock();
    }

    public function testGetDateTime()
    {
        $result = $this->clock->getDateTime();

        $this->assertInstanceOf(DateTime::class, $result);
    }

    public function testGetDateTimeString()
    {
        $result = $this->clock->getDateTimeString();

        $this->assertIsString($result);
    }

    public function testGetDateString()
    {
        $result = $this->clock->getDateString();

        $this->assertIsString($result);
    }

    public function testGetTimeString()
    {
        $result = $this->clock->getTimeString();

        $this->assertIsString($result);
    }

    public function testGetTimestamp()
    {
        $result = $this->clock->getTimestamp();

        $this->assertIsInt($result);
    }

    public function testGetMicrotime()
    {
        $result = $this->clock->getMicrotime();

        $this->assertIsFloat($result);
    }
}
