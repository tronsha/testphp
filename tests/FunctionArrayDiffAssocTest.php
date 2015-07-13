<?php

/**
 * Class FunctionArrayDiffAssocTest
 * @link http://php.net/manual/en/function.array-diff-assoc.php
 */
class FunctionArrayDiffAssocTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayDiffAssoc()
    {
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "green", "yellow", "red");
        $result = array_diff_assoc($array1, $array2);
        $output_array = array('b' => 'brown', 'c' => 'blue', 0 => 'red');
        $this->assertEquals($output_array, $result);
        $array1 = array(0, 1, 2);
        $array2 = array("00", "01", "2");
        $result = array_diff_assoc($array1, $array2);
        $output_array = array(0 => 0, 1 => 1);
        $this->assertEquals($output_array, $result);
    }
}
