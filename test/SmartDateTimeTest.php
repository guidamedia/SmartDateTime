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
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
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
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
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
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
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
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
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
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
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
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->add(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testSmartDateTimeForMonthAdd30th()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2015-11-30');
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->add(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testSmartDateTimeForMonthAdd29th()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2016-02-29');
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
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
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
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

    public function testComplicatedIntervals()
    {
        $date = new DateTime('2015-01-01 00:00:00');
        echo(__FILE__ . ' ' . __LINE__ . ' $date:<pre>' . print_r($date, true) . '</pre>' . PHP_EOL);

        $interval = new DateInterval('P1Y');
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
        $date->add($interval);
        echo(__FILE__ . ' ' . __LINE__ . ' $date:<pre>' . print_r($date, true) . '</pre>' . PHP_EOL);

        $date = new DateTime('2015-01-01 00:00:00');
        $interval->m = 5;
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
        $date->add($interval);
        echo(__FILE__ . ' ' . __LINE__ . ' $date:<pre>' . print_r($date, true) . '</pre>' . PHP_EOL);

        $date = new DateTime('2015-01-01 00:00:00');
        $interval->d = 14;
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
        $date->add($interval);
        echo(__FILE__ . ' ' . __LINE__ . ' $date:<pre>' . print_r($date, true) . '</pre>' . PHP_EOL);

        $date = new DateTime('2015-01-01 00:00:00');
        $interval->h = 12;
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
        $date->add($interval);
        echo(__FILE__ . ' ' . __LINE__ . ' $date:<pre>' . print_r($date, true) . '</pre>' . PHP_EOL);

        $date = new DateTime('2015-01-01 00:00:00');
        $interval->i = 30;
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
        $date->add($interval);
        echo(__FILE__ . ' ' . __LINE__ . ' $date:<pre>' . print_r($date, true) . '</pre>' . PHP_EOL);

        $date = new DateTime('2015-01-01 00:00:00');
        $interval->s = 30;
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
        $date->add($interval);
        echo(__FILE__ . ' ' . __LINE__ . ' $date:<pre>' . print_r($date, true) . '</pre>' . PHP_EOL);
    }

    public function testProofOfConceptForModify()
    {
        $date = new DateTime('2015-01-01 00:00:00');
        echo(__FILE__ . ' ' . __LINE__ . ' $date:<pre>' . print_r($date, true) . '</pre>' . PHP_EOL);
        $date->modify('+1 year +1 month +1 day +1 hour +1 minute +1 second');
        echo(__FILE__ . ' ' . __LINE__ . ' $date:<pre>' . print_r($date, true) . '</pre>' . PHP_EOL);
        $date->modify('-1 year -1 month -1 day -1 hour -1 minute -1 second');
        echo(__FILE__ . ' ' . __LINE__ . ' $date:<pre>' . print_r($date, true) . '</pre>' . PHP_EOL);

        $date = new SmartDateTime('2015-01-01 00:00:00');
        $interval = new DateInterval('P1Y');
        $date->add($interval);
        $interval->m = 5;
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
        $date->sub($interval);
        $interval->d = 14;
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
        $date->add($interval);
        $interval->h = 12;
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
        $date->sub($interval);
        $interval->i = 30;
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
        $date->add($interval);
        $interval->s = 30;
        echo(__FILE__ . ' ' . __LINE__ . ' $interval:<pre>' . print_r($interval, true) . '</pre>' . PHP_EOL);
        $date->sub($interval);
    }

    public function testSmartDateTimeForMonthSub31stLastDay()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2015-01-31');
            $date->useLastDay();
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->sub(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testSmartDateTimeForMonthSub30thLastDay()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2015-11-30');
            $date->useLastDay();
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->sub(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testSmartDateTimeForMonthSub29thLastDay()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2016-02-29');
            $date->useLastDay();
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->sub(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testSmartDateTimeForMonthSub28thLastDay()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2014-02-28');
            $date->useLastDay();
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->add(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testSmartDateTimeForMonthSub15()
    {
        for ($i = 1; $i <= 60; $i++) {
            $date = new SmartDateTime('2014-02-15');
            $date->useLastDay();
            echo(__FILE__ . ' ' . __LINE__ . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$i}");
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}");
            $date->sub(new DateInterval("P{$i}M"));
            echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$date->format('Y-m-d')}<br />");
        }
    }

    public function testProofOfConcept()
    {
        $dateTime = new DateTime('2017-01-31');
        echo(__FILE__ . ' ' . __LINE__ . ' $dateTime:<pre>' . print_r($dateTime, true) . '</pre>' . PHP_EOL);
        $dateTime->add(new DateInterval('P1M'));
        echo(__FILE__ . ' ' . __LINE__ . ' $dateTime:<pre>' . print_r($dateTime, true) . '</pre>' . PHP_EOL);
        $dateTime = new DateTime('2016-03-31');
        echo(__FILE__ . ' ' . __LINE__ . ' $dateTime:<pre>' . print_r($dateTime, true) . '</pre>' . PHP_EOL);
        $dateTime->sub(new DateInterval('P1M'));
        echo(__FILE__ . ' ' . __LINE__ . ' $dateTime:<pre>' . print_r($dateTime, true) . '</pre>' . PHP_EOL);
    }
}

$test = new SmartDateTimeTest();
echo '<hr />';
$test->testProofOfConcept();
echo '<hr />';
$test->testProofOfConceptForModify();
echo '<hr />';
$test->testSmartDateTimeForMonthSub15();
echo '<hr />';
$test->testSmartDateTimeForMonthSub31stLastDay();
echo '<hr />';
$test->testSmartDateTimeForMonthSub30thLastDay();
echo '<hr />';
$test->testSmartDateTimeForMonthSub29thLastDay();
echo '<hr />';
$test->testSmartDateTimeForMonthSub28thLastDay();
echo '<hr />';
$test->testComplicatedIntervals();
echo '<hr />';
$test->testSmartDateTimeForMonthSub31st();
echo '<hr />';
$test->testSmartDateTimeForMonthSub30th();
echo '<hr />';
$test->testSmartDateTimeForMonthSub29th();
echo '<hr />';
$test->testSubtractingDateByMonths15th();
echo '<hr />';
$test->testSmartDateTimeForMonthAdd31st();
echo '<hr />';
$test->testSmartDateTimeForMonthAdd30th();
echo '<hr />';
$test->testSmartDateTimeForMonthAdd29th();
echo '<hr />';
$test->testAdvancingDateByMonths15th();
echo '<hr />';
$test->testAdvancingDateByMonths31st();
echo '<hr />';
$test->testAdvancingDateByMonths30th();
echo '<hr />';
$test->testAdvancingDateByMonths29th();
echo '<hr />';
$test->testAdvancingDateByMonths28th();
echo '<hr />';
$test->testDateInterval();
