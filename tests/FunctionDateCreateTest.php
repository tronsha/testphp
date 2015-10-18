<?php

/**
 * Class FunctionDateCreateTest
 * @link http://php.net/manual/en/function.date-create.php
 * @link http://php.net/manual/en/datetime.construct.php
 */
class FunctionDateCreateTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateCreate()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = new DateTime('2000-01-01');
            $this->assertEquals('2000-01-01', $date->format('Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateCreateProcedural()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = date_create('2000-01-01');
            $this->assertEquals('2000-01-01', date_format($date, 'Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateCreateIntricacies()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = new DateTime('2000-01-01', new DateTimeZone('Pacific/Nauru'));
            $this->assertEquals('2000-01-01 00:00:00+12:00', $date->format('Y-m-d H:i:sP'));
            $date = new DateTime('@946684800');
            $this->assertEquals('2000-01-01 00:00:00+00:00', $date->format('Y-m-d H:i:sP'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }
}
