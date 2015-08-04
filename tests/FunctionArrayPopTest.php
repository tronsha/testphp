<?php

/**
 * Class FunctionArrayPopTest
 * @link http://php.net/manual/en/function.array-pop.php
 */
class FunctionArrayPopTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayPop()
    {
        $stack = array("orange", "banana", "apple", "raspberry");
        $fruit = array_pop($stack);
        $this->assertEquals("raspberry", $fruit);
        $this->assertEquals(array("orange", "banana", "apple"), $stack);
    }
}
