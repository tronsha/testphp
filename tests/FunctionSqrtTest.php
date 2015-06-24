<?php

/**
 * Class FunctionSqrtTest
 * @link http://php.net/manual/en/function.sqrt.php
 */
class FunctionSqrtTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionSqrt()
    {
        $this->assertEquals(3, sqrt(9));
        $this->assertEquals(3.1622776601683795, sqrt(10));
    }
}
