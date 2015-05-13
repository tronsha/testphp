<?php

/**
 * Class FunctionAtanhTest
 * @link http://php.net/manual/en/function.atanh.php
 */
class FunctionAtanhTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionAtanh()
    {
        $this->assertEquals(0, atanh(0));
        $x = 0.5;
        $this->assertEquals(log((1 + $x) / (1 - $x), M_E) / 2, atanh($x));
    }
}
