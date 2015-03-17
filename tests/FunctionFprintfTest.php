<?php

/**
 * Class FunctionFprintfTest
 * @link http://php.net/manual/en/function.fprintf.php
 */
class FunctionFprintfTest extends PHPUnit_Framework_TestCase
{
    protected $fp1;
    protected $fp2;

    protected function setUp()
    {
        $this->fp1 = fopen('date.txt', 'w');
        $this->fp2 = fopen('currency.txt', 'w');
    }

    protected function tearDown()
    {
        unlink('date.txt');
        unlink('currency.txt');
    }

    public function testFunctionFprintf()
    {
        if ($this->fp1 !== false) {
            $year = 1979;
            $month = 4;
            $day = 28;
            fprintf($this->fp1, "%04d-%02d-%02d", $year, $month, $day);
            $this->assertEquals('1979-04-28', file_get_contents('date.txt'));
        }
        if ($this->fp2 !== false) {
            $money1 = 68.75;
            $money2 = 54.35;
            $money = $money1 + $money2;
            $len = fprintf($this->fp2, '%01.2f', $money);
            $this->assertEquals('123.10', file_get_contents('currency.txt'));
            $this->assertEquals('wrote 6 bytes to currency.txt', "wrote $len bytes to currency.txt");
        }
    }
}
