<?php

namespace perf\Timing;

/**
 *
 *
 */
interface Clock
{

    /**
     *
     *
     * @return \DateTime
     */
    public function getDateTime();

    /**
     *
     *
     * @return string
     */
    public function getDateTimeString();

    /**
     *
     *
     * @return string
     */
    public function getDateString();

    /**
     *
     *
     * @return string
     */
    public function getTimeString();

    /**
     *
     *
     * @return int
     */
    public function getTimestamp();

    /**
     *
     *
     * @return float
     */
    public function getMicrotime();
}
