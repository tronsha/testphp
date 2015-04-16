<?php

/**
 * Class FunctionStriposTest
 * @link http://php.net/manual/en/function.stripos.php
 */
class FunctionStriposTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStripos()
    {
        $findme    = 'a';
        $mystring1 = 'xyz';
        $mystring2 = 'ABC';
        $this->assertFalse(stripos($mystring1, $findme));
        $this->assertEquals(0, stripos($mystring2, $findme));

    }
}
