<?php

/**
 * Class FunctionHashEqualsTest
 * @link http://php.net/manual/en/function.hash-equals.php
 */
class FunctionHashEqualsTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHashEquals()
    {
        if (version_compare(phpversion(), '5.6.0', '>=') === true) {
            $expected  = crypt('12345', '$2a$07$usesomesillystringforsalt$');
            $correct   = crypt('12345', '$2a$07$usesomesillystringforsalt$');
            $incorrect = crypt('apple', '$2a$07$usesomesillystringforsalt$');
            $this->assertTrue(hash_equals($expected, $correct));
            $this->assertFalse(hash_equals($expected, $incorrect));
        }
    }
}
