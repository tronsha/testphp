<?php

/**
 * Class FunctionArrayIntersectTest
 * @link http://php.net/manual/en/function.array-intersect.php
 */
class FunctionArrayIntersectTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayIntersect()
    {
        $array1 = array("a" => "green", "red", "blue");
        $array2 = array("b" => "green", "yellow", "red");
        $result = array_intersect($array1, $array2);
        $this->assertEquals(array('a' => 'green', 0 => 'red'), $result);
    }
}
