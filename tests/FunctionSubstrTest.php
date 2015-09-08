<?php

/**
 * Class FunctionSubstrTest
 * @link http://php.net/manual/en/function.substr.php
 */
class FunctionSubstrTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionSubstrNegativeStart()
    {
        $this->assertEquals('f', substr("abcdef", -1));
        $this->assertEquals('ef', substr("abcdef", -2));
        $this->assertEquals('d', substr("abcdef", -3, 1));
    }

    public function testFunctionSubstrNegativeLength()
    {
        $this->assertEquals('abcde', substr("abcdef", 0, -1));
        $this->assertEquals('cde', substr("abcdef", 2, -1));
        $this->assertFalse(substr("abcdef", 4, -4));
        $this->assertEquals('de', substr("abcdef", -3, -1));
    }

    public function testFunctionSubstrUsage()
    {
        $this->assertEquals('bcdef', substr('abcdef', 1));
        $this->assertEquals('bcd', substr('abcdef', 1, 3));
        $this->assertEquals('abcd', substr('abcdef', 0, 4));
        $this->assertEquals('abcdef', substr('abcdef', 0, 8));
        $this->assertEquals('f', substr('abcdef', -1, 1));
        $string = 'abcdef';
        $this->assertEquals('a', $string[0]);
        $this->assertEquals('d', $string[3]);
        $this->assertEquals('f', $string[strlen($string) - 1]);
    }

    public function testFunctionSubstrCastingBehaviour()
    {
        $this->assertEquals('pe', substr("pear", 0, 2));
        $this->assertEquals('54', substr(54321, 0, 2));
        $this->assertEquals('gr', substr(new apple(), 0, 2));
        $this->assertEquals('1', substr(true, 0, 1));
        if (version_compare(phpversion(), '7.0.0-dev', '>=') === true) {
            $this->assertEquals('', substr(false, 0, 1));
        } else {
            $this->assertFalse(substr(false, 0, 1));
        }
        $this->assertFalse(substr("", 0, 1));
        $this->assertEquals('1200', substr(1.2e3, 0, 4));
    }
}

class apple
{
    public function __toString()
    {
        return "green";
    }
}
