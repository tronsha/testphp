<?php

/**
 * Class FunctionDateSunsetTest
 * @link http://php.net/manual/en/function.date-sunset.php
 */
class FunctionDateSunsetTest extends PHPUnit_Framework_TestCase
{
    public function testDateSunset()
    {
        $date = new DateTime('17-12-2004', new DateTimeZone('America/Los_Angeles'));
//        $date->setDate(2004, 12, 20);
        $this->assertEquals('18:13', date_sunset($date->getTimestamp(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1));
    }
}
