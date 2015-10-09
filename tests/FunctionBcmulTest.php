<?php

/**
 * Class FunctionBcmulTest
 * @link http://php.net/manual/en/function.bcmul.php
 */
class FunctionBcmulTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionBcmul()
    {
        $this->assertEquals(47.161, bcmul('1.34747474747', '35', 3));
        $this->assertEquals(8, bcmul('2', '4'));
    }
}
