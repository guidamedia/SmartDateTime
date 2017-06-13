<?php

namespace RobGuida\SmartDateTime;

use DateInterval;
use DateTime;
use DateTimeZone;

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
    /** @var boolean */
    private $use_last_day;

    /**
     * @param string $date
     * @param DateTimeZone $zone
     * @todo get TimeZone and set it when $zone = null
     */
    public function __construct($date, DateTimeZone $zone = null)
    {
        if (is_null($zone)) {
            $zone = new DateTimeZone('America/New_York');
        }
        parent::__construct($date, $zone);
        $this->useOriginalDay();
    }


    /**
     * Using the last day of the month in cases where the original date is < what the last day
     *  of the month would be for the resulting month
     */
    public function useLastDay()
    {
        $this->use_last_day = true;
    }

    /**
     * Using the original day of the month when the final day of the month > the original day
     *  of the month would be for the resulting month
     */
    public function useOriginalDay()
    {
        $this->use_last_day = false;
    }

    /**
     * @return boolean
     */
    public function isLastDay()
    {
        return $this->use_last_day;
    }

    /**
     * Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object
     * @param DateInterval $interval
     * @return DateTime
     * @link http://php.net/manual/en/datetime.sub.php
     */
    public function sub(DateInterval $interval)
    {
        $this->modifyDateSmartly($interval, '-');
        return $this;
    }

    /**
     * Adds an amount of days, months, years, hours, minutes and seconds to a DateTime object
     * @param DateInterval $interval
     * @return DateTime
     * @link http://php.net/manual/en/datetime.add.php
     */
    public function add(DateInterval $interval)
    {
        $this->modifyDateSmartly($interval, '+');
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
        if (28 <= $this->format('d')) {
            $output = (
                (31 == $this->format('d'))
                || (30 == $this->format('d') && in_array($this->format('m'), array(4, 6, 9, 11)))
                || (2 == $this->format('m') &&
                    (29 == $this->format('d') || (28 == $this->format('d') && !$this->isItLeapYear())))
            );
        }
        return $output;
    }

    /**
     * @param DateInterval $interval
     * @param $operator
     */
    private function modifyDateSmartly(DateInterval $interval, $operator)
    {
        /*
         * analyze the interval. it could have y, m, d, h, i, s
         * it maybe slower, but we would have to rotate through the values and add/subtract from
         *      the date one at a time, or we could build a modify string
         */
        if (0 < $interval->m && $this->isItTheLastDayOfTheMonth()) {
            /* modify the year */
            if (0 < $interval->y) {
                parent::modify("{$operator}{$interval->y} year");
            }
            /* modify the month */
            $orig_day = $this->format('d');
            $this->setDate(
                $this->format('Y'),
                $this->format('m'),
                15
            );
            parent::modify("{$operator}{$interval->m} month");
            $last_day = date('t', $this->getTimestamp());
            if ($last_day > $orig_day && !$this->isLastDay()) {
                $new_day = $orig_day;
            } else {
                $new_day = $last_day;
            }
            $this->setDate(
                $this->format('Y'),
                $this->format('m'),
                $new_day
            );
            /* modify the remaining datetime intervals */
            if (0 < $interval->d || 0 < $interval->h || 0 < $interval->i || 0 < $interval->s) {
                /* since we have already advanced year and month, we do not want them a part of the modify string */
                $interval->y = 0;
                $interval->m = 0;
                $modString = $this->getModifyString($interval, $operator);
                parent::modify($modString);
            }

        } else {
            if ('+' == $operator) {
                parent::add($interval);
            } else {
                $modString = $this->getModifyString($interval, '-');
                parent::modify($modString);
            }
        }
    }

    /**
     * @param DateInterval $interval
     * @param string $operator
     * @return string
     * @todo loop through the interval object properties
     */
    private function getModifyString(DateInterval $interval, $operator)
    {
        $mod_parts = array();
        if (0 < $interval->y) {
            $mod_parts[] = "{$operator}{$interval->y}";
        }
        if (0 < $interval->m) {
            $mod_parts[] = "{$operator}{$interval->m}";
        }
        if (0 < $interval->d) {
            $mod_parts[] = "{$operator}{$interval->d}";
        }
        if (0 < $interval->h) {
            $mod_parts[] = "{$operator}{$interval->h}";
        }
        if (0 < $interval->i) {
            $mod_parts[] = "{$operator}{$interval->i}";
        }
        if (0 < $interval->s) {
            $mod_parts[] = "{$operator}{$interval->s}";
        }
        $output = implode(' ', $mod_parts);
        return $output;
    }
}
