<?php

/**
 * Class FunctionLogTest
 * @link http://php.net/manual/en/function.log.php
 */
class FunctionLogTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionLog()
    {
        $this->assertEquals(3.0, log(pow(M_E, 3)));
        $this->assertEquals(8.0, log(256, 2));
        $this->assertEquals(6.0, log(1000000, 10));
    }
}
