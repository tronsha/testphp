<?php

/**
 * Class FunctionArraySpliceTest
 * @link http://php.net/manual/en/function.array-splice.php
 */
class FunctionArraySpliceTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArraySplice()
    {
        $input = array("red", "green", "blue", "yellow");
        array_splice($input, 2);
        $this->assertEquals(array("red", "green"), $input);
        $input = array("red", "green", "blue", "yellow");
        array_splice($input, 1, -1);
        $this->assertEquals(array("red", "yellow"), $input);
        $input = array("red", "green", "blue", "yellow");
        array_splice($input, 1, count($input), "orange");
        $this->assertEquals(array("red", "orange"), $input);
        $input = array("red", "green", "blue", "yellow");
        array_splice($input, -1, 1, array("black", "maroon"));
        $this->assertEquals(array("red", "green", "blue", "black", "maroon"), $input);
        $input = array("red", "green", "blue", "yellow");
        array_splice($input, 3, 0, "purple");
        $this->assertEquals(array("red", "green", "blue", "purple", "yellow"), $input);
    }
}
