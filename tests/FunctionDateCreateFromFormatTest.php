<?php

/**
 * Class FunctionDateCreateFromFormatTest
 * @link http://php.net/manual/en/function.date-create-from-format.php
 * @link http://php.net/manual/en/datetime.createfromformat.php
 */
class FunctionDateCreateFromFormatTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateCreateFromFormat()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = DateTime::createFromFormat('j-M-Y', '15-Feb-2009');
            $this->assertEquals('2009-02-15', date_format($date, 'Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateCreateFromFormatProcedural()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date = date_create_from_format('j-M-Y', '15-Feb-2009');
            $this->assertEquals('2009-02-15', date_format($date, 'Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateCreateFromFormatIntricacies()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $format = 'Y-m-d H:i:s';
            $date = DateTime::createFromFormat($format, '2009-02-15 15:16:17');
            $this->assertEquals('2009-02-15 15:16:17', $date->format('Y-m-d H:i:s'));
            $format = 'Y-m-!d H:i:s';
            $date = DateTime::createFromFormat($format, '2009-02-15 15:16:17');
            $this->assertEquals('1970-01-15 15:16:17', $date->format('Y-m-d H:i:s'));
            $format = '!d';
            $date = DateTime::createFromFormat($format, '15');
            $this->assertEquals('1970-01-15 00:00:00', $date->format('Y-m-d H:i:s'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
