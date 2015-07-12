<?php

/**
 * Class FunctionArrayCountValuesTest
 * @link http://php.net/manual/en/function.array-count-values.php
 */
class FunctionArrayCountValuesTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayCountValues()
    {
        $input_array = array(1, "hello", 1, "world", "hello");
        $output_array = array(1 => 2, 'hello' => 2, 'world' => 1);
        $this->assertEquals($output_array, array_count_values($input_array));
    }
}
