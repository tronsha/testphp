<?php

/**
 * Class FunctionStrtoupperTest
 * @link http://php.net/manual/en/function.strtoupper.php
 */
class FunctionStrtoupperTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrtoupper()
    {
        $str = "Mary Had A Little Lamb and She LOVED It So";
        $str = strtoupper($str);
        $this->assertEquals('MARY HAD A LITTLE LAMB AND SHE LOVED IT SO', $str);
    }
}
