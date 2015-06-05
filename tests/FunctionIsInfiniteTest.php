<?php

/**
 * Class FunctionIsInfiniteTest
 * @link http://php.net/manual/en/function.is-infinite.php
 */
class FunctionIsInfiniteTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionIsInfinite()
    {
        $this->assertFalse(is_infinite(2));
        $this->assertTrue(is_infinite(log(0)));
    }
}
