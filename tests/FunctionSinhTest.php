<?php

/**
 * Class FunctionSinhTest
 * @link http://php.net/manual/en/function.sinh.php
 */
class FunctionSinhTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionSinh()
    {
        $x = 10;
        $this->assertEquals((pow(M_E, $x) - pow(M_E, -$x)) / 2, sinh($x));
    }
}
