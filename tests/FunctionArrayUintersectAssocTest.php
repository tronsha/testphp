<?php

/**
 * Class FunctionArrayUintersectAssocTest
 * @link http://php.net/manual/en/function.array-uintersect-assoc.php
 */
class FunctionArrayUintersectAssocTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayUintersectAssoc()
    {
        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
        $this->assertEquals(array('a' => 'green'), array_uintersect_assoc($array1, $array2, "strcasecmp"));
    }
}
