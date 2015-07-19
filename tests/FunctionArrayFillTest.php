<?php

/**
 * Class FunctionArrayFillTest
 * @link http://php.net/manual/en/function.array-fill.php
 */
class FunctionArrayFillTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayFill()
    {
        $output_array = array(5 => 'banana', 6 => 'banana', 7 => 'banana', 8 => 'banana', 9 => 'banana', 10 => 'banana');
        $this->assertEquals($output_array, array_fill(5, 6, 'banana'));
        $output_array = array(-2 => 'pear', 0 => 'pear', 1 => 'pear', 2 => 'pear');
        $this->assertEquals($output_array, array_fill(-2, 4, 'pear'));
    }
}
