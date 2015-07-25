<?php

/**
 * Class FunctionArrayIntersectUkeyTest
 * @link http://php.net/manual/en/function.array-intersect-ukey.php
 */
class FunctionArrayIntersectUkeyTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayIntersectUkey()
    {
        $array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
        $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
        $result_array = array_intersect_ukey($array1, $array2, 'key_compare_func');
        $this->assertEquals(array("blue" => 1, "green" => 3), $result_array);
    }
}

if (function_exists('key_compare_func') === false) {
    function key_compare_func($key1, $key2)
    {
        if ($key1 == $key2)
            return 0;
        else if ($key1 > $key2)
            return 1;
        else
            return -1;
    }
}
