<?php

/**
 * Class FunctionArrayShiftTest
 * @link http://php.net/manual/en/function.array-shift.php
 */
class FunctionArrayShiftTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayShift()
    {
        $stack = array("orange", "banana", "apple", "raspberry");
        $fruit = array_shift($stack);
        $this->assertEquals("orange", $fruit);
        $this->assertEquals(array("banana", "apple", "raspberry"), $stack);
    }
}
