<?php

/**
 * Class FunctionArrayReverseTest
 * @link http://php.net/manual/en/function.array-reverse.php
 */
class FunctionArrayReverseTest extends PHPUnit_Framework_TestCase
{

    public function testFunctionArrayReverse()
    {
        $input = array("php", 4.0, array("green", "red"));
        $reversed = array_reverse($input);
        $preserved = array_reverse($input, true);
        $this->assertEquals(array(0 => 'php', 1 => 4, 2 => array(0 => 'green', 1 => 'red')), $input);
        $this->assertEquals(array(0 => array(0 => 'green', 1 => 'red'), 1 => 4, 2 => 'php'), $reversed);
        $this->assertEquals(array(2 => array(0 => 'green', 1 => 'red'), 1 => 4, 0 => 'php'), $preserved);
    }
}
