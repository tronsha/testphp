<?php

/**
 * Class FunctionArrayMergeTest
 * @link http://php.net/manual/en/function.array-merge.php
 */
class FunctionArrayMergeTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayMerge()
    {
        $array1 = array("color" => "red", 2, 4);
        $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
        $result = array_merge($array1, $array2);
        $this->assertEquals(array('color' => 'green', 0 => 2, 1 => 4, 2 => 'a', 3 => 'b', 'shape' => 'trapezoid', 4 => 4), $result);
        $array1 = array();
        $array2 = array(1 => "data");
        $result = array_merge($array1, $array2);
        $this->assertEquals(array(0 => 'data'), $result);
        $array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
        $array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
        $result = $array1 + $array2;
        $this->assertEquals(array(0 => "zero_a", 2 => "two_a", 3 => "three_a", 1 => "one_b", 4 => "four_b"), $result);
        $beginning = 'foo';
        $end = array(1 => 'bar');
        $result = array_merge((array)$beginning, (array)$end);
        $this->assertEquals(array(0 => 'foo', 1 => 'bar'), $result);
    }
}
