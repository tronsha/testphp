<?php

/**
 * Class FunctionAddcslashesTest
 * @link http://php.net/manual/en/function.addcslashes.php
 */
class FunctionAddcslashesTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionAddcslashes()
    {
        $this->assertEquals('\\f\\o\\o\\[ \\]', addcslashes('foo[ ]', 'A...z'));
        $this->assertEquals("\\zoo['\\.']", addcslashes("zoo['.']", 'z...A'));
    }
}
