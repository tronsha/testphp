<?php

/**
 * Class FunctionMtGetrandmaxTest
 * @link http://php.net/manual/en/function.mt-getrandmax.php
 */
class FunctionMtGetrandmaxTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionMtGetrandmax()
    {
        $this->assertEquals(2147483647, mt_getrandmax());
    }
}
