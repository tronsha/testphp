<?php

/**
 * Class FunctionCurrentTest
 * @link http://php.net/manual/en/function.current.php
 */
class FunctionCurrentTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionCurrent()
    {
        $transport = array('foot', 'bike', 'car', 'plane');
        $mode = current($transport);
        $this->assertEquals('foot', $mode);
        $mode = next($transport);
        $this->assertEquals('bike', $mode);
        $mode = current($transport);
        $this->assertEquals('bike', $mode);
        $mode = prev($transport);
        $this->assertEquals('foot', $mode);
        $mode = end($transport);
        $this->assertEquals('plane', $mode);
        $mode = current($transport);
        $this->assertEquals('plane', $mode);
        $arr = array();
        $this->assertFalse(current($arr));
        $arr = array(array());
        $this->assertEquals(array(), current($arr));
    }
}
