<?php

/**
 * Class FunctionCeilTest
 * @link http://php.net/manual/en/function.ceil.php
 */
class FunctionCeilTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionCeil()
    {
        $this->assertEquals(5, ceil(4.3));
        $this->assertEquals(10, ceil(9.999));
        $this->assertEquals(-3, ceil(-3.14));
    }
}
