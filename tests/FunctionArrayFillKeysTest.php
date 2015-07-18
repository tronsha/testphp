<?php

/**
 * Class FunctionArrayFillKeysTest
 * @link http://php.net/manual/en/function.array-fill-keys.php
 */
class FunctionArrayFillKeysTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayFillKeys()
    {
        if (version_compare(phpversion(), '5.2.0', '>=') === true) {
            $keys = array('foo', 5, 10, 'bar');
            $output_array = array('foo' => 'banana', 5 => 'banana', 10 => 'banana', 'bar' => 'banana');
            $this->assertEquals($output_array, array_fill_keys($keys, 'banana'));
        } else {
            $info = phpversion() . ' < 5.2.0';
        }
    }
}
