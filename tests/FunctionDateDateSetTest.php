<?php

/**
 * Class FunctionDateDateSetTest
 * @link http://php.net/manual/en/function.date-date-set.php
 * @link http://php.net/manual/en/datetime.setdate.php
 */
class FunctionDateDateSetTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateDateSet()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = new DateTime();
            $date->setDate(2001, 2, 3);
            $this->assertEquals('2001-02-03', $date->format('Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateDateSetProcedural()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = date_create();
            date_date_set($date, 2001, 2, 3);
            $this->assertEquals('2001-02-03', date_format($date, 'Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateDateSetRanges()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $date = new DateTime();
            $date->setDate(2001, 2, 28);
            $this->assertEquals('2001-02-28', $date->format('Y-m-d'));
            $date->setDate(2001, 2, 29);
            $this->assertEquals('2001-03-01', $date->format('Y-m-d'));
            $date->setDate(2001, 14, 3);
            $this->assertEquals('2002-02-03', $date->format('Y-m-d'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.2.0');
        }
    }
}
