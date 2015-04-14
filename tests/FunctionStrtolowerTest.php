<?php

/**
 * Class FunctionStrtolowerTest
 * @link http://php.net/manual/en/function.strtolower.php
 */
class FunctionStrtolowerTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrtolower()
    {
        $str = "Mary Had A Little Lamb and She LOVED It So";
        $str = strtolower($str);
        $this->assertEquals('mary had a little lamb and she loved it so', $str);
    }
}
