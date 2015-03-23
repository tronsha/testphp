<?php

/**
 * Class FunctionVsprintfTest
 * @link http://php.net/manual/en/function.vsprintf.php
 */
class FunctionVsprintfTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioVsprintf()
    {
        $string = vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1'));
        $this->assertEquals('1988-08-01', $string);
    }
}
