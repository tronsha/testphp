<?php

/**
 * Class FunctionAsinhTest
 * @link http://php.net/manual/en/function.asinh.php
 */
class FunctionAsinhTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionAsinh()
    {
        $this->assertEquals(0, asinh(0));
        $x = 100;
        $this->assertEquals(log($x + sqrt(pow($x, 2) + 1), M_E), asinh($x));
    }
}
