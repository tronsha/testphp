<?php

/**
 * Class FunctionBcaddTest
 * @link http://php.net/manual/en/function.bcadd.php
 */
class FunctionBcaddTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBcadd()
    {
        $a = '1.234';
        $b = '5';
        $this->assertEquals(6, bcadd($a, $b));
        $this->assertEquals(6.2340, bcadd($a, $b, 4));
    }
}
