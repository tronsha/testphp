<?php

/**
 * Class FunctionDateFormatTest
 * @link http://php.net/manual/en/function.date-format.php
 * @link http://php.net/manual/en/datetime.format.php
 */
class FunctionDateFormatTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateFormat()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = new DateTime('2000-01-01');
            $this->assertEquals('2000-01-01 00:00:00', $date->format('Y-m-d H:i:s'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateFormatProcedural()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = date_create('2000-01-01');
            $this->assertEquals('2000-01-01 00:00:00', date_format($date, 'Y-m-d H:i:s'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }
}
