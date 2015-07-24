<?php

/**
 * Class FunctionArrayIntersectUassocTest
 * @link http://php.net/manual/en/function.array-intersect-uassoc.php
 */
class FunctionArrayIntersectUassocTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayIntersectUassoc()
    {
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
        $result_array = array_intersect_uassoc($array1, $array2, "strcasecmp");
        $this->assertEquals(array("b" => "brown"), $result_array);
    }
}
