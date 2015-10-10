<?php

/**
 * Class FunctionBcpowTest
 * @link http://php.net/manual/en/function.bcpow.php
 */
class FunctionBcpowTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBcpow()
    {
        $this->assertEquals(74.08, bcpow('4.2', '3', 2));
    }
}
