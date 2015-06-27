<?php

/**
 * Class FunctionTanhTest
 * @link http://php.net/manual/en/function.tanh.php
 */
class FunctionTanhTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionTanh()
    {
        $this->assertEquals(sinh(M_PI) / cosh(M_PI), tanh(M_PI));
    }
}
