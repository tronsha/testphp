<?php

/**
 * Class FunctionArrayUintersectUassocTest
 * @link http://php.net/manual/en/function.array-uintersect-uassoc.php
 */
class FunctionArrayUintersectUassocTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayUintersectUassoc()
    {
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
        $this->assertEquals(
            array('a' => 'green', 'b' => 'brown'),
            array_uintersect_uassoc($array1, $array2, "strcasecmp", "strcasecmp")
        );
    }
}
