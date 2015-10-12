<?php

/**
 * Class FunctionBcscaleTest
 * @link http://php.net/manual/en/function.bcscale.php
 */
class FunctionBcscaleTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBcscale()
    {
        $this->assertEquals(16, bcdiv('105', '6.55957'));
        bcscale(3);
        $this->assertEquals(16.007, bcdiv('105', '6.55957'));
        bcscale(0);
        $this->assertEquals(16, bcdiv('105', '6.55957'));
    }
}
