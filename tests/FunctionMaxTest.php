<?php

/**
 * Class FunctionMaxTest
 * @link http://php.net/manual/en/function.Max.php
 */
class FunctionMaxTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionMax()
    {
        $this->assertEquals(7, max(2, 3, 1, 6, 7));
        $this->assertEquals(5, max(array(2, 4, 5)));
        $this->assertEquals(0, max(0, 'hello'));
        $this->assertEquals('hello', max('hello', 0));
        $this->assertEquals('hello', max('hello', -1));
        $this->assertEquals(array(1, 1, 1, 1), max(array(2, 2, 2), array(1, 1, 1, 1)));
        $this->assertEquals(array(2, 5, 1), max(array(2, 4, 8), array(2, 5, 1)));
        $this->assertEquals(array(2, 5, 7), max('string', array(2, 5, 7), 42));
        $this->assertEquals(-10, max(-10, false));
        $this->assertEquals(true, max(0, true));
    }
}
