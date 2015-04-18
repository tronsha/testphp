<?php

/**
 * Class FunctionStrcspnTest
 * @link http://php.net/manual/en/function.strcspn.php
 */
class FunctionStrcspnTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrcspn()
    {
        $this->assertEquals(0, strcspn('abcd',  'apple'));
        $this->assertEquals(0, strcspn('abcd',  'banana'));
        $this->assertEquals(2, strcspn('hello', 'l'));
        $this->assertEquals(2, strcspn('hello', 'world'));
    }
}
