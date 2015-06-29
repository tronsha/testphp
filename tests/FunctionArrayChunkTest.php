<?php

/**
 * Class FunctionArrayChunkTest
 * @link http://php.net/manual/en/function.array-chunk.php
 */
class FunctionArrayChunkTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayChunk()
    {
        $input_array = array('a', 'b', 'c', 'd', 'e');
        $output_array = array(array('a', 'b'), array('c', 'd'), array('e'));
        $this->assertEquals($output_array, array_chunk($input_array, 2));
        $output_array = array(array(0 => 'a', 1 => 'b'), array(2 => 'c', 3 => 'd'), array(4 => 'e'));
        $this->assertEquals($output_array, array_chunk($input_array, 2, true));
    }
}
