<?php

/**
 * Class FunctionArrayKeysTest
 * @link http://php.net/manual/en/function.array-keys.php
 */
class FunctionArrayKeysTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayKeys()
    {
        $array = array(0 => 100, "color" => "red");
        $this->assertEquals(array(0 => 0, 1 => 'color'), array_keys($array));
        $array = array("blue", "red", "green", "blue", "blue");
        $this->assertEquals(array(0 => 0, 1 => 3, 2 => 4), array_keys($array, "blue"));
        $array = array("color" => array("blue", "red", "green"), "size" => array("small", "medium", "large"));
        $this->assertEquals(array(0 => 'color', 1 => 'size'), array_keys($array));
    }
}
