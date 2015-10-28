<?php

/**
 * Class FunctionIntdivTest
 * @link http://php.net/manual/en/function.intdiv.php
 */
class FunctionIntdivTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 7.0
     */
    public function testFunctionIntdiv()
    {
        if (version_compare(phpversion(), '7.0.0', '>=') === true) {
            $this->assertEquals(1, intdiv(3, 2));
            $this->assertEquals(-1, intdiv(-3, 2));
            $this->assertEquals(-1, intdiv(3, -2));
            $this->assertEquals(1, intdiv(-3, -2));
            $this->assertEquals(1, intdiv(PHP_INT_MAX, PHP_INT_MAX));
            $this->assertEquals(1, intdiv(-PHP_INT_MAX - 1, -PHP_INT_MAX - 1));
//            $this->assertEquals(0, intdiv(-PHP_INT_MAX - 1, -1));
//            $this->assertFalse(intdiv(1, 0));
        } else {
            $this->markTestSkipped(phpversion() . ' < 7.0.0');
        }
    }
}
