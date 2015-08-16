<?php

/**
 * Class FunctionArraySumTest
 * @link http://php.net/manual/en/function.array-sum.php
 */
class FunctionArraySumTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArraySum()
    {
        $a = array(2, 4, 6, 8);
        $this->assertEquals(20, array_sum($a));
        $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
        $this->assertEquals(6.9, array_sum($b));
    }
}
