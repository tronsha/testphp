<?php

/**
 * Class FunctionArrayCombineTest
 * @link http://php.net/manual/en/function.array-combine.php
 */
class FunctionArrayCombineTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayCombine()
    {
        $a = array('green', 'red', 'yellow');
        $b = array('avocado', 'apple', 'banana');
        $c = array_combine($a, $b);
        $this->assertEquals(array('green' => 'avocado', 'red' => 'apple', 'yellow' => 'banana'), $c);
    }
}
