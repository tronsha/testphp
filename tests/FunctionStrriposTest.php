<?php

/**
 * Class FunctionStrriposTest
 * @link http://php.net/manual/en/function.strripos.php
 */
class FunctionStrriposTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrripos()
    {
        $haystack = 'ababcd';
        $needle = 'aB';
        $pos = strripos($haystack, $needle);
        $this->assertEquals(2, $pos);
    }
}
