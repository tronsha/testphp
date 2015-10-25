<?php

/**
 * Class FunctionDateModifyTest
 * @link http://php.net/manual/en/function.date-modify.php
 * @link http://php.net/manual/en/datetime.modify.php
 */
class FunctionDateModifyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateModify()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = new DateTime('2006-12-12');
            $date->modify('+1 day');
            $this->assertEquals('2006-12-13', $date->format('Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateModifyProcedural()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = date_create('2006-12-12');
            date_modify($date, '+1 day');
            $this->assertEquals('2006-12-13', date_format($date, 'Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateModifyBeware()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = new DateTime('2000-12-31');
            $date->modify('+1 month');
            $this->assertEquals('2001-01-31', $date->format('Y-m-d'));
            $date->modify('+1 month');
            $this->assertEquals('2001-03-03', $date->format('Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }
}
