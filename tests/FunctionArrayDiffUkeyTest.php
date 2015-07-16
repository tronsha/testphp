<?php

/**
 * Class FunctionArrayDiffUkeyTest
 * @link http://php.net/manual/en/function.array-diff-ukey.php
 */
class FunctionArrayDiffUkeyTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayDiffUkey()
    {
        if (version_compare(phpversion(), '5.1.0', '>=') === true) {
            $array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
            $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
            $result = array_diff_ukey($array1, $array2, 'key_compare_func');
            $output_array = array('red' => 2, 'purple' => 4);
            $this->assertEquals($output_array, $result);
        } else {
            $info = phpversion() . ' < 5.1.0';
        }
    }
}

if (function_exists('key_compare_func') === false) {
    function key_compare_func($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }
}
