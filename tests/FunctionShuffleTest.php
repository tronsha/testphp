<?php

/**
 * Class FunctionShuffleTest
 * @link http://php.net/manual/en/function.shuffle.php
 */
class FunctionShuffleTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionShuffle()
    {
        $numbers = range(1, 20);
        $this->assertTrue(shuffle($numbers));
        $first = array_shift($numbers);
        $this->assertGreaterThanOrEqual('1', $first);
        $this->assertLessThanOrEqual('20', $first);
    }
}
