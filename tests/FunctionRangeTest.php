<?php

/**
 * Class FunctionRangeTest
 * @link http://php.net/manual/en/function.range.php
 */
class FunctionRangeTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionRange()
    {
        $array = array();
        foreach (range(0, 12) as $number) {
            $array[] = $number;
        }
        $this->assertEquals(array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12), $array);
        $array = array();
        foreach (range(0, 100, 10) as $number) {
            $array[] = $number;
        }
        $this->assertEquals(array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100), $array);
        $array = array();
        foreach (range('a', 'i') as $letter) {
            $array[] = $letter;
        }
        $this->assertEquals(array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'), $array);
        $array = array();
        foreach (range('c', 'a') as $letter) {
            $array[] = $letter;
        }
        $this->assertEquals(array('c', 'b', 'a'), $array);
    }
}
