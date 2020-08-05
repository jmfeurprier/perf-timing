<?php

namespace perf\Timing;

/**
 *
 */
class RealTimeClockTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    protected function setUp()
    {
        $this->clock = new RealTimeClock();
    }

    /**
     *
     */
    public function testGetDateTime()
    {
        $result = $this->clock->getDateTime();

        $this->assertInstanceOf('\\DateTime', $result);
    }

    /**
     *
     */
    public function testGetDateTimeString()
    {
        $result = $this->clock->getDateTimeString();

        $this->assertInternalType('string', $result);
    }

    /**
     *
     */
    public function testGetDateString()
    {
        $result = $this->clock->getDateString();

        $this->assertInternalType('string', $result);
    }

    /**
     *
     */
    public function testGetTimeString()
    {
        $result = $this->clock->getTimeString();

        $this->assertInternalType('string', $result);
    }

    /**
     *
     */
    public function testGetTimestamp()
    {
        $result = $this->clock->getTimestamp();

        $this->assertInternalType('int', $result);
    }

    /**
     *
     */
    public function testGetMicrotime()
    {
        $result = $this->clock->getMicrotime();

        $this->assertInternalType('float', $result);
    }
}
