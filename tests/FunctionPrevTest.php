<?php

/**
 * Class FunctionPrevTest
 * @link http://php.net/manual/en/function.prev.php
 */
class FunctionPrevTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionPrev()
    {
        $transport = array('foot', 'bike', 'car', 'plane');
        $mode = current($transport);
        $this->assertEquals('foot', $mode);
        $mode = next($transport);
        $this->assertEquals('bike', $mode);
        $mode = next($transport);
        $this->assertEquals('car', $mode);
        $mode = prev($transport);
        $this->assertEquals('bike', $mode);
        $mode = end($transport);
        $this->assertEquals('plane', $mode);
    }
}
