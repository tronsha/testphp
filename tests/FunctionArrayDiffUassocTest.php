<?php

/**
 * Class FunctionArrayDiffUassocTest
 * @link http://php.net/manual/en/function.array-diff-uassoc.php
 */
class FunctionArrayDiffUassocTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayDiffUassoc()
    {
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "green", "yellow", "red");
        $result = array_diff_uassoc($array1, $array2, "key_compare_func");
        $output_array = array('b' => 'brown', 'c' => 'blue', 0 => 'red');
        $this->assertEquals($output_array, $result);
    }
}

function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}
