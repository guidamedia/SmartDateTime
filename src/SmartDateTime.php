<?php

namespace RobGuida\SmartDateTime;

use DateInterval;
use DateTime;
use DateTimeZone;
use Exception;

/**
 * Class SmartDateTime
 *
 * @category Odds_And_Ends
 * @package  SmartDateTime
 * @author   Robert Guida <robguida4@gmail.com>
 * @license  Free, Baby, Free!
 * @link     www.robguida.coms
 */
class SmartDateTime extends DateTime
{
    /**
     * @param string $date
     * @param DateTimeZone $zone
     */
    public function __construct($date, DateTimeZone $zone = null)
    {
        if (is_null($zone)) {
            $zone = new DateTimeZone('America/New_York');
        }
        parent::__construct($date, $zone);
    }

    /**
     * Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object
     * @param DateInterval $interval
     * @return DateTime
     * @link http://php.net/manual/en/datetime.sub.php
     */
    public function sub(DateInterval $interval)
    {
        try {
            $output = $this;
        } catch (Exception $e) {
            $output = false;
        }
        return $output;
    }

    /**
     * Adds an amount of days, months, years, hours, minutes and seconds to a DateTime object
     * @param DateInterval $interval
     * @return DateTime
     * @link http://php.net/manual/en/datetime.add.php
     */
    public function add2(DateInterval $interval)
    {
        if (0 < $interval->m && $this->isItTheLastDayOfTheMonth()) {
            $this->setDate(
                $this->format('Y'),
                $this->format('m'),
                15
            );
            parent::add($interval);
            $this->setDate(
                $this->format('Y'),
                $this->format('m'),
                date('t', $this->getTimestamp())
            );
        } else {
            parent::add($interval);
        }
        return $this;
    }

    /**
     * @return bool
     */
    public function isItLeapYear()
    {
        return $this->format('Y') % 4 == 0;
    }

    /**
     * @return bool
     */
    public function isItTheLastDayOfTheMonth()
    {
        $output = false;
        /* wanted to build this out for speed... even though we are talking microseconds
            1st, is the day >= 29th? If not then we have out answer - it is not the last day of the month.
            2nd, is it the 31st? If so, we have the answer since 31 is the max number of days in a month.
            3rd, is it the 30th? if so, then we need to validate the month is a 30 day month
            finally, is it February? If so, is it the 29th? If so, then we have our answer, since
                        that is the longest day of Feb when it is leap year, which it must be in this case.
            the 28th has no issues when advancing
        */
        if (29 <= $this->format('d')) {
            $output = (
                (31 == $this->format('d'))
                || (30 == $this->format('d') && in_array($this->format('m'), array(4, 6, 9, 11)))
                || (2 == $this->format('m') && (29 == $this->format('d')))
            );
        }
        return $output;
    }
}
