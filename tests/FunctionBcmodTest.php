<?php

/**
 * Class FunctionBcmodTest
 * @link http://php.net/manual/en/function.bcmod.php
 */
class FunctionBcmodTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBcmod()
    {
        $this->assertEquals(0, bcmod('4', '2'));
        $this->assertEquals(2, bcmod('2', '4'));
    }
}
