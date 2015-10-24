<?php

/**
 * Class FunctionDateIsodateSetTest
 * @link http://php.net/manual/en/function.date-isodate-set.php
 * @link http://php.net/manual/en/datetime.setisodate.php
 */
class FunctionDateIsodateSetTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateIsodateSet()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = new DateTime();
            $date->setISODate(2008, 2);
            $this->assertEquals('2008-01-07', $date->format('Y-m-d'));
            $date->setISODate(2008, 2, 7);
            $this->assertEquals('2008-01-13', $date->format('Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateIsodateSetProcedural()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = date_create();
            date_isodate_set($date, 2008, 2);
            $this->assertEquals('2008-01-07', date_format($date, 'Y-m-d'));
            date_isodate_set($date, 2008, 2, 7);
            $this->assertEquals('2008-01-13', date_format($date, 'Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateIsodateSetExceeding()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = new DateTime();
            $date->setISODate(2008, 2, 7);
            $this->assertEquals('2008-01-13', $date->format('Y-m-d'));
            $date->setISODate(2008, 2, 8);
            $this->assertEquals('2008-01-14', $date->format('Y-m-d'));
            $date->setISODate(2008, 53, 7);
            $this->assertEquals('2009-01-04', $date->format('Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateIsodateSetFinding()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = new DateTime();
            $date->setISODate(2008, 14);
            $this->assertEquals('3', $date->format('n'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }
}
