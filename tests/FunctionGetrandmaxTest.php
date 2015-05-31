<?php

/**
 * Class FunctionGetrandmaxTest
 * @link http://php.net/manual/en/function.getrandmax.php
 */
class FunctionGetrandmaxTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionGetrandmax()
    {
        $this->assertEquals(2147483647, getrandmax());
    }
}
