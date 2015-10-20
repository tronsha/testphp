<?php

/**
 * Class FunctionDateDiffTest
 * @link http://php.net/manual/en/function.date-diff.php
 * @link http://php.net/manual/en/datetime.diff.php
 */
class FunctionDateDiffTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateDiff()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $datetime1 = new DateTime('2009-10-11');
            $datetime2 = new DateTime('2009-10-13');
            $interval = $datetime1->diff($datetime2);
            $this->assertEquals('+2 days', $interval->format('%R%a days'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateDiffProcedural()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $datetime1 = date_create('2009-10-11');
            $datetime2 = date_create('2009-10-13');
            $interval = date_diff($datetime1, $datetime2);
            $this->assertEquals('+2 days', $interval->format('%R%a days'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }

    /**
     * @requires PHP 5.2
     */
    public function testFunctionDateDiffComparison()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $date1 = new DateTime("now");
            $date2 = new DateTime("tomorrow");
            $this->assertFalse($date1 == $date2);
            $this->assertTrue($date1 < $date2);
            $this->assertFalse($date1 > $date2);
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
