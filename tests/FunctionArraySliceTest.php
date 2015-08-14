<?php

/**
 * Class FunctionArraySliceTest
 * @link http://php.net/manual/en/function.array-slice.php
 */
class FunctionArraySliceTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArraySlice()
    {
        $input = array("a", "b", "c", "d", "e");
        $this->assertEquals(array('c', 'd', 'e'), array_slice($input, 2));
        $this->assertEquals(array('d'), array_slice($input, -2, 1));
        $this->assertEquals(array('a', 'b', 'c'), array_slice($input, 0, 3));
        $this->assertEquals(array(0 => 'c', 1 => 'd'), array_slice($input, 2, -1));
        $this->assertEquals(array(2 => 'c', 3 => 'd'), array_slice($input, 2, -1, true));
    }
}
