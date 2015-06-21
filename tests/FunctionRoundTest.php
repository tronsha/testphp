<?php

/**
 * Class FunctionRoundTest
 * @link http://php.net/manual/en/function.round.php
 */
class FunctionRoundTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionRound()
    {
        $this->assertEquals(3, round(3.4));
        $this->assertEquals(4, round(3.5));
        $this->assertEquals(4, round(3.6));
        $this->assertEquals(4, round(3.6, 0));
        $this->assertEquals(1.96, round(1.95583, 2));
        $this->assertEquals(1242000, round(1241757, -3));
        $this->assertEquals(5.05, round(5.045, 2));
        $this->assertEquals(5.06, round(5.055, 2));
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionRoundMode()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $this->assertEquals(10, round(9.5, 0, PHP_ROUND_HALF_UP));
            $this->assertEquals(9, round(9.5, 0, PHP_ROUND_HALF_DOWN));
            $this->assertEquals(10, round(9.5, 0, PHP_ROUND_HALF_EVEN));
            $this->assertEquals(9, round(9.5, 0, PHP_ROUND_HALF_ODD));
            $this->assertEquals(9, round(8.5, 0, PHP_ROUND_HALF_UP));
            $this->assertEquals(8, round(8.5, 0, PHP_ROUND_HALF_DOWN));
            $this->assertEquals(8, round(8.5, 0, PHP_ROUND_HALF_EVEN));
            $this->assertEquals(9, round(8.5, 0, PHP_ROUND_HALF_ODD));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
