<?php

namespace RobGuida\Test\SmartDateTime;

require_once '../bootstrap.php';

use DateInterval;
use DateTime;
use RobGuida\SmartDateTime\SmartDateTime;

// use PHPUnit_Framework_TestCase;

class SmartDateTimeTest // extends PHPUnit_Framework_TestCase
{
    public function testAdvancingDateByMonths15th()
    {
        /* this is a proof of concept... that if we set the day to 15th, add 12-36 months
            we should always land on the 15th. */
        for ($i = 1; $i <= 60; $i++) {
            $date = new DateTime('2015-05-15');
            echo(__FILE__ . ' ' . __LINE__ . " {$date->format('Y-m-d')} ");
            $date->add(new DateInterval("P{$i}M"));
            echo(" {$date->format('Y-m-d')}<br />");
        }
    }

    public function testAdvancingDateByMonths31st()
    {
        /* this is a proof of concept... that if we set the day to 15th, add 12-36 months
            we should always land on the 15th. */
        for ($i = 1; $i <= 60; $i++) {
            $date = new DateTime('2015-01-31');
            echo(__FILE__ . ' ' . __LINE__ . " {$date->format('Y-m-d')} ");
            $date->add(new DateInterval("P{$i}M"));
            echo(" {$date->format('Y-m-d')}<br />");
        }
    }

    public function testAdvancingDateByMonths30th()
    {
        /* this is a proof of concept... that if we set the day to 15th, add 12-36 months
            we should always land on the 15th. */
        for ($i = 1; $i <= 60; $i++) {
            $date = new DateTime('2015-06-30');
            echo(__FILE__ . ' ' . __LINE__ . " {$date->format('Y-m-d')} ");
            $date->add(new DateInterval("P{$i}M"));
            echo(" {$date->format('Y-m-d')}<br />");
        }
    }

    public function testAdvancingDateByMonths29th()
    {
        /* this is a proof of concept... that if we set the day to 15th, add 12-36 months
            we should always land on the 15th. */
        for ($i = 1; $i <= 60; $i++) {
            $date = new DateTime('2016-02-29');
            echo(__FILE__ . ' ' . __LINE__ . " {$date->format('Y-m-d')} ");
            $date->add(new DateInterval("P{$i}M"));
            echo(" {$date->format('Y-m-d')}<br />");
        }
    }

    public function testAdvancingDateByMonths28th()
    {
        /* this is a proof of concept... that if we set the day to 15th, add 12-36 months
            we should always land on the 15th. */
        for ($i = 1; $i <= 60; $i++) {
            $date = new DateTime('2015-02-28');
            echo(__FILE__ . ' ' . __LINE__ . " {$date->format('Y-m-d')} ");
            $date->add(new DateInterval("P{$i}M"));
            echo(" {$date->format('Y-m-d')}<br />");
        }
    }

    public function testDateInterval()
    {
        $interval = new DateInterval('P25M');
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
    }

    public function testSmartDateTimeForMonthAdd31st()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2015-01-31');
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->add(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testSmartDateTimeForMonthAdd30th()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2015-11-30');
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->add(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testSmartDateTimeForMonthAdd29th()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2016-02-29');
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->add(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testSubtractingDateByMonths15th()
    {
        /* this is a proof of concept... that if we set the day to 15th, add 12-36 months
            we should always land on the 15th. */
        for ($i = 1; $i <= 60; $i++) {
            $date = new DateTime('2015-05-15');
            echo(__FILE__ . ' ' . __LINE__ . " {$date->format('Y-m-d')} ");
            $date->modify("-{$i} month");
            echo(" {$date->format('Y-m-d')}<br />");
        }
    }

    public function testSmartDateTimeForMonthSub31st()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2015-01-31');
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->sub(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testSmartDateTimeForMonthSub30th()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2015-11-30');
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->sub(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testSmartDateTimeForMonthSub29th()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2016-02-29');
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->sub(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }
//    public function testDateTimeIntervalYearSub()
//    {
//        $dt = new SmartDateTime('2016-02-28');
//        $interval = new DateInterval('P2Y');
//        $dt->sub($interval);
//
//        $dt = new SmartDateTime('2016-02-29');
//        $interval = new DateInterval('P4Y');
//        $dt->sub($interval);
//
//        $dt = new SmartDateTime('2016-02-29');
//        $interval = new DateInterval('P2Y');
//        $dt->sub($interval);
//
//        $dt = new SmartDateTime('2016-05-31');
//        $interval = new DateInterval('P1Y');
//        $dt->sub($interval);
//    }
}

$test = new SmartDateTimeTest();
echo '<hr />';
$test->testSmartDateTimeForMonthSub31st();
echo '<hr />';
$test->testSmartDateTimeForMonthSub30th();
echo '<hr />';
$test->testSmartDateTimeForMonthSub29th();
//echo '<hr />';
//$test->testSubtractingDateByMonths15th();
echo '<hr />';
$test->testSmartDateTimeForMonthAdd31st();
echo '<hr />';
$test->testSmartDateTimeForMonthAdd30th();
echo '<hr />';
$test->testSmartDateTimeForMonthAdd29th();
//echo '<hr />';
//$test->testAdvancingDateByMonths15th();
//echo '<hr />';
//$test->testAdvancingDateByMonths31st();
//echo '<hr />';
//$test->testAdvancingDateByMonths30th();
//echo '<hr />';
//$test->testAdvancingDateByMonths29th();
//echo '<hr />';
//$test->testAdvancingDateByMonths28th();
//echo '<hr />';
//$test->testDateInterval();
