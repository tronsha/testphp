<?php

/**
 * Class FunctionCoshTest
 * @link http://php.net/manual/en/function.cosh.php
 */
class FunctionCoshTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionCosh()
    {
        $x = 10;
        $this->assertEquals((pow(M_E, $x) + pow(M_E, -$x)) / 2, cosh($x));
    }
}
