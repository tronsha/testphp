<?php

/**
 * Class FunctionArrayDiffTest
 * @link http://php.net/manual/en/function.array-diff.php
 */
class FunctionArrayDiffTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayDiff()
    {
        $array1 = array("a" => "green", "red", "blue", "red");
        $array2 = array("b" => "green", "yellow", "red");
        $result = array_diff($array1, $array2);
        $output_array = array(1 => 'blue');
        $this->assertEquals($output_array, $result);
    }
}
