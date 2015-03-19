<?php

/**
 * Class FunctionParseStrTest
 * @link http://php.net/manual/en/function.parse-str.php
 */
class FunctionParseStrTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionParseStr()
    {
        $str = "first=value&arr[]=foo+bar&arr[]=baz";
        parse_str($str);
        $this->assertEquals('value', $first);
        $this->assertEquals('foo bar', $arr[0]);
        $this->assertEquals('baz', $arr[1]);
        parse_str($str, $output);
        $this->assertEquals('value', $output['first']);
        $this->assertEquals('foo bar', $output['arr'][0]);
        $this->assertEquals('baz', $output['arr'][1]);
    }
}
