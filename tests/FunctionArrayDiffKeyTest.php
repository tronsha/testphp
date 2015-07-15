<?php

/**
 * Class FunctionArrayDiffKeyTest
 * @link http://php.net/manual/en/function.array-diff-key.php
 */
class FunctionArrayDiffKeyTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayDiffKey()
    {
        if (version_compare(phpversion(), '5.1.0', '>=') === true) {
            $array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
            $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
            $result = array_diff_key($array1, $array2);
            $output_array = array('red' => 2, 'purple' => 4);
            $this->assertEquals($output_array, $result);
        } else {
            $info = phpversion() . ' < 5.1.0';
        }
    }
}
