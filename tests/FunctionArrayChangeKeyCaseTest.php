<?php

/**
 * Class FunctionArrayChangeKeyCaseTest
 * @link http://php.net/manual/en/function.array-change-key-case.php
 */
class FunctionArrayChangeKeyCaseTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayChangeKeyCase()
    {
        $input_array = array("FirSt" => 1, "SecOnd" => 4);
        $output_array = array("FIRST" => 1, "SECOND" => 4);
        $this->assertEquals($output_array, array_change_key_case($input_array, CASE_UPPER));
    }
}
