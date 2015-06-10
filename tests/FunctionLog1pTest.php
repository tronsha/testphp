<?php

/**
 * Class FunctionLog1pTest
 * @link http://php.net/manual/en/function.log1p.php
 */
class FunctionLog1pTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionLog1p()
    {
        $this->assertEquals(3.0, log1p(pow(M_E, 3) - 1));
    }
}
