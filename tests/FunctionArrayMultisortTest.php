<?php

/**
 * Class FunctionArrayMultisortTest
 * @link http://php.net/manual/en/function.array-multisort.php
 */
class FunctionArrayMultisortTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayMultisort()
    {
        $ar1 = array(10, 100, 100, 0);
        $ar2 = array(1, 3, 2, 4);
        array_multisort($ar1, $ar2);
        $this->assertEquals(array(0 => 0, 1 => 10, 2 => 100, 3 => 100), $ar1);
        $this->assertEquals(array(0 => 4, 1 => 1, 2 => 2, 3 => 3), $ar2);
        $ar = array(array("10", 11, 100, 100, "a"), array(1, 2, "2", 3, 1));
        array_multisort($ar[0], SORT_ASC, SORT_STRING, $ar[1], SORT_NUMERIC, SORT_DESC);
        $this->assertEquals(array(0 => array(0 => '10', 1 => 100, 2 => 100, 3 => 11, 4 => 'a'), 1 => array(0 => 1, 1 => 3, 2 => '2', 3 => 2, 4 => 1)), $ar);
        $array = array('Alpha', 'atomic', 'Beta', 'bank');
        $array_lowercase = array_map('strtolower', $array);
        array_multisort($array_lowercase, SORT_ASC, SORT_STRING, $array);
        $this->assertEquals(array(0 => 'Alpha', 1 => 'atomic', 2 => 'bank', 3 => 'Beta'), $array);
    }
}
