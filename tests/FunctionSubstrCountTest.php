<?php

/**
 * Class FunctionSubstrCountTest
 * @link http://php.net/manual/en/function.substr-count.php
 */
class FunctionSubstrCountTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionSubstrCount()
    {
        $text = 'This is a test';
        $this->assertEquals(14, strlen($text)); // 14
        $this->assertEquals(2, substr_count($text, 'is')); // 2
        $this->assertEquals(1, substr_count($text, 'is', 3));
        $this->assertEquals(0, substr_count($text, 'is', 3, 3));
        $text2 = 'gcdgcdgcd';
        $this->assertEquals(1, substr_count($text2, 'gcdgcd'));
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Warning
     */
    public function testFunctionSubstrCountWarning()
    {
        $text = 'This is a test';
        $this->assertEquals(0, substr_count($text, 'is', 5, 10));
    }
}
