<?php

/**
 * Class FunctionArrayIntersectAssocTest
 * @link http://php.net/manual/en/function.array-intersect-assoc.php
 */
class FunctionArrayIntersectAssocTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayIntersectAssoc()
    {
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "green", "b" => "yellow", "blue", "red");
        $result_array = array_intersect_assoc($array1, $array2);
        $this->assertEquals(array('a' => 'green'), $result_array);
    }
}
