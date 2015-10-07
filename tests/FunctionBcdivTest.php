<?php

/**
 * Class FunctionBcdivTest
 * @link http://php.net/manual/en/function.bcdiv.php
 */
class FunctionBcdivTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBcdiv()
    {
        $this->assertEquals(16.007, bcdiv('105', '6.55957', 3));
    }
}
