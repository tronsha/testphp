<?php

/**
 * Class FunctionCountTest
 * @link http://php.net/manual/en/function.count.php
 */
class FunctionCountTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionCount()
    {
        $a[0] = 1;
        $a[1] = 3;
        $a[2] = 5;
        $result = count($a);
        $this->assertEquals(3, $result);
        $b[0]  = 7;
        $b[5]  = 9;
        $b[10] = 11;
        $result = count($b);
        $this->assertEquals(3, $result);
        $result = count(null);
        $this->assertEquals(0, $result);
        $result = count(false);
        $this->assertEquals(1, $result);
    }

    public function testFunctionCountRecursive()
    {
        $food = array('fruits' => array('orange', 'banana', 'apple'), 'veggie' => array('carrot', 'collard', 'pea'));
        $this->assertEquals(8, count($food, COUNT_RECURSIVE));
        $this->assertEquals(2, count($food));
    }
}
