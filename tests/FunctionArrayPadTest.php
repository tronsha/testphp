<?php

/**
 * Class FunctionArrayPadTest
 * @link http://php.net/manual/en/function.array-pad.php
 */
class FunctionArrayPadTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayPad()
    {
        $input = array(12, 10, 9);
        $this->assertEquals(array(12, 10, 9, 0, 0), array_pad($input, 5, 0));
        $this->assertEquals(array(-1, -1, -1, -1, 12, 10, 9), array_pad($input, -7, -1));
        $this->assertEquals(array(12, 10, 9), array_pad($input, 2, "noop"));
    }
}
