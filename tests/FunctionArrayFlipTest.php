<?php

/**
 * Class FunctionArrayFlipTest
 * @link http://php.net/manual/en/function.array-flip.php
 */
class FunctionArrayFlipTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayFlip()
    {
        $input = array('oranges', 'apples', 'pears');
        $output = array('oranges' => 0, 'apples' => 1, 'pears' => 2);
        $this->assertEquals($output, array_flip($input));
        $input = array('a' => 1, 'b' => 1, 'c' => 2);
        $output = array(1 => 'b', 2 => 'c');
        $this->assertEquals($output, array_flip($input));
    }
}
