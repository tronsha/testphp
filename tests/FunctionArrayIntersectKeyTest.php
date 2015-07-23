<?php

/**
 * Class FunctionArrayIntersectKeyTest
 * @link http://php.net/manual/en/function.array-intersect-key.php
 */
class FunctionArrayIntersectKeyTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayIntersectKey()
    {
        $array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
        $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
        $result_array = array_intersect_key($array1, $array2);
        $this->assertEquals(array('blue' => 1, 'green' => 3), $result_array);
    }
}
