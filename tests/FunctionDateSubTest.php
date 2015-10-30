<?php

/**
 * Class FunctionDateSubTest
 * @link http://php.net/manual/en/function.date-sub.php
 * @link http://php.net/manual/en/datetime.sub.php
 */
class FunctionDateSubTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testDateSub()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = new DateTime('2000-01-20');
            $date->sub(new DateInterval('P10D'));
            $this->assertEquals('2000-01-10', $date->format('Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.3
     */
    public function testDateSubProcedural()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = date_create('2000-01-20');
            date_sub($date, date_interval_create_from_date_string('10 days'));
            $this->assertEquals('2000-01-10', date_format($date, 'Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.3
     */
    public function testDateSubFurther()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = new DateTime('2000-01-20');
            $date->sub(new DateInterval('PT10H30S'));
            $this->assertEquals('2000-01-19 13:59:30', $date->format('Y-m-d H:i:s'));
            $date = new DateTime('2000-01-20');
            $date->sub(new DateInterval('P7Y5M4DT4H3M2S'));
            $this->assertEquals('1992-08-15 19:56:58', $date->format('Y-m-d H:i:s'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.3
     */
    public function testDateSubBeware()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = new DateTime('2001-04-30');
            $interval = new DateInterval('P1M');
            $date->sub($interval);
            $this->assertEquals('2001-03-30', $date->format('Y-m-d'));
            $date->sub($interval);
            $this->assertEquals('2001-03-02', $date->format('Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
