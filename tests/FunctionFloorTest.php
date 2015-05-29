<?php

/**
 * Class FunctionFloorTest
 * @link http://php.net/manual/en/function.floor.php
 */
class FunctionFloorTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionFloor()
    {
        $this->assertEquals(4, floor(4.3));
        $this->assertEquals(9, floor(9.999));
        $this->assertEquals(-4, floor(-3.14));
    }
}
