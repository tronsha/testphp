<?php

/**
 * Class FunctionArrayReplaceTest
 * @link http://php.net/manual/en/function.array-replace.php
 */
class FunctionArrayReplaceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @requires PHP 5.3
     */
    public function testFunctionArrayReplace()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $base = array("orange", "banana", "apple", "raspberry");
            $replacements = array(0 => "pineapple", 4 => "cherry");
            $replacements2 = array(0 => "grape");
            $basket = array_replace($base, $replacements, $replacements2);
            $this->assertEquals(
                array(0 => 'grape', 1 => 'banana', 2 => 'apple', 3 => 'raspberry', 4 => 'cherry'),
                $basket
            );
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
