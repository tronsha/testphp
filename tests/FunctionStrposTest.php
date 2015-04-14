<?php

/**
 * Class FunctionStrposTest
 * @link http://php.net/manual/en/function.strpos.php
 */
class FunctionStrposTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrpos()
    {
        $this->assertTrue(strpos('abc', 'a') !== false);
        $this->assertEquals(0, strpos('abc', 'a'));
        $this->assertEquals(7, strpos('abcdef abcdef', 'a', 1));
        $this->assertFalse(strpos('abc', 'd'));
    }
}
