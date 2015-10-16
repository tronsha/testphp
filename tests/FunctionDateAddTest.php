<?php

/**
 * Class FunctionDateAddTest
 * @link http://php.net/manual/en/function.date-add.php
 * @link http://php.net/manual/en/datetime.add.php
 */
class FunctionDateAddTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateAdd()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = new DateTime('2000-01-01');
            $date->add(new DateInterval('P10D'));
            $this->assertEquals('2000-01-11', date_format($date, 'Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateAddProcedural()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = date_create('2000-01-01');
            date_add($date, date_interval_create_from_date_string('10 days'));
            $this->assertEquals('2000-01-11', date_format($date, 'Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateAddFurther()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = new DateTime('2000-01-01');
            $date->add(new DateInterval('PT10H30S'));
            $this->assertEquals('2000-01-01 10:00:30', $date->format('Y-m-d H:i:s'));
            $date = new DateTime('2000-01-01');
            $date->add(new DateInterval('P7Y5M4DT4H3M2S'));
            $this->assertEquals('2007-06-05 04:03:02', $date->format('Y-m-d H:i:s'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateAddBeware()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = new DateTime('2000-12-31');
            $interval = new DateInterval('P1M');
            $date->add($interval);
            $this->assertEquals('2001-01-31', $date->format('Y-m-d'));
            $date->add($interval);
            $this->assertEquals('2001-03-03', $date->format('Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
