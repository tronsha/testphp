<?php

/**
 * Class FunctionDateIntervalFormatTest
 * @link http://php.net/manual/en/function.date-interval-format.php
 * @link http://php.net/manual/en/dateinterval.format.php
 */
class FunctionDateIntervalFormatTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testFunctionDateIntervalFormat()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $interval = new DateInterval('P2Y4DT6H8M');
            $this->assertEquals('4 days', $interval->format('%d days'));
            $interval = new DateInterval('P32D');
            $this->assertEquals('32 days', $interval->format('%d days'));
            $january = new DateTime('2010-01-01');
            $february = new DateTime('2010-02-01');
            $interval = $february->diff($january);
            $this->assertEquals('31 total days', $interval->format('%a total days'));
            $this->assertEquals('1 month, 0 days', $interval->format('%m month, %d days'));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
