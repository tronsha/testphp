<?php

/**
 * Class FunctionInArrayTest
 * @link http://php.net/manual/en/function.in-array.php
 */
class FunctionInArrayTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionInArray()
    {
        $os = array("Mac", "NT", "Irix", "Linux");
        $this->assertTrue(in_array("Irix", $os));
        $this->assertFalse(in_array("mac", $os));
        $a = array('1.10', 12.4, 1.13);
        $this->assertFalse(in_array('12.4', $a, true));
        $this->assertTrue(in_array(1.13, $a, true));
        $a = array(array('p', 'h'), array('p', 'r'), 'o');
        $this->assertTrue(in_array(array('p', 'h'), $a));
        $this->assertFalse(in_array(array('f', 'i'), $a));
        $this->assertTrue(in_array('o', $a));
    }
}
