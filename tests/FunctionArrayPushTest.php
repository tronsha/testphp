<?php

/**
 * Class FunctionArrayPushTest
 * @link http://php.net/manual/en/function.array-push.php
 */
class FunctionArrayPushTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayPush()
    {
        $stack = array("orange", "banana");
        array_push($stack, "apple", "raspberry");
        $this->assertEquals(array(0 => 'orange', 1 => 'banana', 2 => 'apple', 3 => 'raspberry'), $stack);
    }
}
