<?php

/**
 * Class FunctionSubstrReplaceTest
 * @link http://php.net/manual/en/function.substr-replace.php
 */
class FunctionSubstrReplaceTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionSubstrReplace()
    {
        $var = 'ABCDEFGH:/MNRPQR/';
        $this->assertEquals('bob', substr_replace($var, 'bob', 0));
        $this->assertEquals('bob', substr_replace($var, 'bob', 0, strlen($var)));
        $this->assertEquals('bobABCDEFGH:/MNRPQR/', substr_replace($var, 'bob', 0, 0));
        $this->assertEquals('ABCDEFGH:/bob/', substr_replace($var, 'bob', 10, -1));
        $this->assertEquals('ABCDEFGH:/bob/', substr_replace($var, 'bob', -7, -1));
        $this->assertEquals('ABCDEFGH://', substr_replace($var, '', 10, -1));
    }

    public function testFunctionSubstrReplaceMultiple()
    {
        $input = array('A: XXX', 'B: XXX', 'C: XXX');
        $this->assertEquals('A: YYY; B: YYY; C: YYY', implode('; ', substr_replace($input, 'YYY', 3, 3)));
        $replace = array('AAA', 'BBB', 'CCC');
        $this->assertEquals('A: AAA; B: BBB; C: CCC', implode('; ', substr_replace($input, $replace, 3, 3)));
        $length = array(1, 2, 3);
        $this->assertEquals('A: AAAXX; B: BBBX; C: CCC', implode('; ', substr_replace($input, $replace, 3, $length)));
    }
}
