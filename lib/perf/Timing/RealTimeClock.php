<?php

namespace perf\Timing;

/**
 *
 *
 */
class RealTimeClock implements Clock
{

    /**
     *
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return new \DateTime();
    }

    /**
     *
     *
     * @return string
     */
    public function getDateTimeString()
    {
        return $this->getDateTime()->format('Y-m-d H:i:s');
    }

    /**
     *
     *
     * @return string
     */
    public function getDateString()
    {
        return $this->getDateTime()->format('Y-m-d');
    }

    /**
     *
     *
     * @return string
     */
    public function getTimeString()
    {
        return $this->getDateTime()->format('H:i:s');
    }

    /**
     *
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->getDateTime()->getTimestamp();
    }

    /**
     *
     *
     * @return float
     */
    public function getMicrotime()
    {
        return microtime(true);
    }
}
