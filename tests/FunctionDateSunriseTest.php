<?php

/**
 * Class FunctionDateSunriseTest
 * @link http://php.net/manual/en/function.date-sunrise.php
 */
class FunctionDateSunriseTest extends PHPUnit_Framework_TestCase
{
    public function testDateSunrise()
    {
        $date = new DateTime('23-12-2004', new DateTimeZone('America/Los_Angeles'));
//        $date->setDate(2004, 12, 20);
        $this->assertEquals('08:54', date_sunrise($date->getTimestamp(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1));
    }
}
