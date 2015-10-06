<?php

/**
 * Class FunctionBccompTest
 * @link http://php.net/manual/en/function.bccomp.php
 */
class FunctionBccompTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBccomp()
    {
        $this->assertEquals(-1, bccomp('1', '2'));
        $this->assertEquals(0, bccomp('1.00001', '1', 3));
        $this->assertEquals(1, bccomp('1.00001', '1', 5));
    }
}
