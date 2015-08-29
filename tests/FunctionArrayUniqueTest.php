<?php

/**
 * Class FunctionArrayUniqueTest
 * @link http://php.net/manual/en/function.array-unique.php
 */
class FunctionArrayUniqueTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayUnique()
    {
        $input = array("a" => "green", "red", "b" => "green", "blue", "red");
        $result = array_unique($input);
        $this->assertEquals(array('a' => 'green', 0 => 'red', 1 => 'blue'), $result);
        $input = array(4, "4", "3", 4, 3, "3");
        $result = array_unique($input);
        $this->assertEquals(array(0 => 4, 2 => "3"), $result);
    }
}
