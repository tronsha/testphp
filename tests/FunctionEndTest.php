<?php

/**
 * Class FunctionEndTest
 * @link http://php.net/manual/en/function.end.php
 */
class FunctionEndTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionEnd()
    {
        $fruits = array('apple', 'banana', 'cranberry');
        $this->assertEquals('cranberry', end($fruits));
    }
}
