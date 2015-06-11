<?php

/**
 * Class FunctionMinTest
 * @link http://php.net/manual/en/function.min.php
 */
class FunctionMinTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionMin()
    {
        $this->assertEquals(1, min(2, 3, 1, 6, 7));
        $this->assertEquals(2, min(array(2, 4, 5)));
        $this->assertEquals(0, min(0, 'hello'));
        $this->assertEquals('hello', min('hello', 0));
        $this->assertEquals(-1, min('hello', -1));
        $this->assertEquals(array(2, 2, 2), min(array(2, 2, 2), array(1, 1, 1, 1)));
        $this->assertEquals(array(2, 4, 8), min(array(2, 4, 8), array(2, 5, 1)));
        $this->assertEquals('string', min('string', array(2, 5, 7), 42));
        $this->assertEquals(false, min(-10, false, 10));
        $this->assertEquals(null, min(-10, null, 10));
        $this->assertEquals(0, min(0, true));
    }
}
