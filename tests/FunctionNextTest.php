<?php

/**
 * Class FunctionNextTest
 * @link http://php.net/manual/en/function.next.php
 */
class FunctionNextTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionNext()
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
