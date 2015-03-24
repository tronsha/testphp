<?php

/**
 * Class FunctionFprintfTest
 * @link http://php.net/manual/en/function.fprintf.php
 */
class FunctionFprintfTest extends PHPUnit_Framework_TestCase
{
    protected $fp;

    protected function setUp()
    {
        $this->fp = fopen('example.txt', 'w');
        if (false === $this->fp) {
            $this->markTestSkipped('fopen fails');
        }
    }

    protected function tearDown()
    {
        unlink('example.txt');
    }

    public function testFunctionFprintfDate()
    {
        $year = 1979;
        $month = 4;
        $day = 28;
        fprintf($this->fp, "%04d-%02d-%02d", $year, $month, $day);
        $this->assertEquals('1979-04-28', file_get_contents('example.txt'));
    }

    public function testFunctionFprintfCurrency()
    {
        $money1 = 68.75;
        $money2 = 54.35;
        $money = $money1 + $money2;
        $len = fprintf($this->fp, '%01.2f', $money);
        $this->assertEquals('123.10', file_get_contents('example.txt'));
        $this->assertEquals('wrote 6 bytes to example.txt', "wrote $len bytes to example.txt");
    }
}
