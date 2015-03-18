<?php

/**
 * Class FunctionNumberFormatTest
 * @link http://php.net/manual/en/function.number-format.php
 */
class FunctionNumberFormatTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionNumberFormat()
    {
        $number = 1234.56;
        $english_format_number = number_format($number);
        $this->assertEquals('1,235', $english_format_number);
        $nombre_format_francais = number_format($number, 2, ',', ' ');
        $this->assertEquals('1 234,56', $nombre_format_francais);
        $number = 1234.5678;
        $english_format_number = number_format($number, 2, '.', '');
        $this->assertEquals('1234.57', $english_format_number);
    }
}
