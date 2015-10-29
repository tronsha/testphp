<?php

/**
 * Class FunctionDateParseTest
 * @link http://php.net/manual/en/function.date-parse.php
 */
class FunctionDateParseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.2
     */
    public function testDateParse()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $dateArray = date_parse("2006-12-12 10:00:00.5");
            $this->assertEquals('2006', $dateArray['year']);
            $this->assertEquals('12', $dateArray['month']);
            $this->assertEquals('12', $dateArray['day']);
            $this->assertEquals('10', $dateArray['hour']);
            $this->assertEquals('0', $dateArray['minute']);
            $this->assertEquals('0', $dateArray['second']);
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testDateParseRelative()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $dateArray = date_parse("2006-12-12 10:00:00.5 +1 week +1 hour");
            $this->assertEquals('2006', $dateArray['year']);
            $this->assertEquals('12', $dateArray['month']);
            $this->assertEquals('12', $dateArray['day']);
            $this->assertEquals('10', $dateArray['hour']);
            $this->assertEquals('0', $dateArray['minute']);
            $this->assertEquals('0', $dateArray['second']);
            $this->assertEquals('7', $dateArray['relative']['day']);
            $this->assertEquals('1', $dateArray['relative']['hour']);
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }
}
