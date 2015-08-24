<?php

/**
 * Class FunctionArrayUnshiftTest
 * @link http://php.net/manual/en/function.array-unshift.php
 */
class FunctionArrayUnshiftTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayUnshift()
    {
        $queue = array("orange", "banana");
        array_unshift($queue, "apple", "raspberry");;
        $this->assertEquals(array(0 => 'apple', 1 => 'raspberry', 2 => 'orange', 3 => 'banana'), $queue);
    }
}
