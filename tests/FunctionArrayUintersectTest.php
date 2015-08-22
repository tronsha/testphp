<?php

/**
 * Class FunctionArrayUintersectTest
 * @link http://php.net/manual/en/function.array-uintersect.php
 */
class FunctionArrayUintersectTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayUintersect()
    {
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
        $this->assertEquals(array('a' => 'green', 'b' => 'brown', 0 => 'red'), array_uintersect($array1, $array2, "strcasecmp"));
    }
}
