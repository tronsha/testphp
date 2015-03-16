<?php

/**
 * Class FunctionCountCharsTest
 * @link http://php.net/manual/en/function.count-chars.php
 */
class FunctionCountCharsTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionCountChars()
    {
        $data = "Two Ts and one F.";
        $array = count_chars($data, 1);
        $this->assertEquals(2, $array[ord('T')]);
        $this->assertEquals(1, $array[ord('F')]);
    }
}
