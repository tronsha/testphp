<?php

/**
 * Class FunctionStristrTest
 * @link http://php.net/manual/en/function.stristr.php
 */
class FunctionStristrTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStristr()
    {
        $email = 'USER@EXAMPLE.com';
        $this->assertEquals('ER@EXAMPLE.com', stristr($email, 'e'));
        $string = 'Hello World!';
        $this->assertFalse(stristr($string, 'earth'));
        $string = 'APPLE';
        $this->assertEquals('APPLE', stristr($string, 97));
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionStrstrBeforeNeedle()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $email = 'USER@EXAMPLE.com';
            $this->assertEquals('US', stristr($email, 'e', true));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
