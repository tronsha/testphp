<?php

/**
 * Class FunctionSubstrCompareTest
 * @link http://php.net/manual/en/function.substr-compare.php
 */
class FunctionSubstrCompareTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionSubstrCompare()
    {
        $this->assertEquals(0, substr_compare("abcde", "bc", 1, 2));
        $this->assertEquals(0, substr_compare("abcde", "de", -2, 2));
        $this->assertEquals(0, substr_compare("abcde", "bcg", 1, 2));
        $this->assertEquals(0, substr_compare("abcde", "BC", 1, 2, true));
        $this->assertEquals(1, substr_compare("abcde", "bc", 1, 3));
        $this->assertEquals(-1, substr_compare("abcde", "cd", 1, 2));
    }

    /**
     * @expectedException PHPUnit_Framework_Error_Warning
     */
    public function testFunctionSubstrCompareWarning()
    {
        substr_compare("abcde", "abc", 5, 1);
    }
}
