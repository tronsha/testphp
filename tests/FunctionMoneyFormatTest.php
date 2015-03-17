<?php

/**
 * Class FunctionMoneyFormatTest
 * @link http://php.net/manual/en/function.money-format.php
 */
class FunctionMoneyFormatTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        if (false === setlocale(LC_MONETARY, 'en_US')) {
            $this->markTestSkipped('setlocale return false');
        }
    }

    public function testFunctionMoneyFormat()
    {
        $number = 1234.56;
        $this->assertEquals('USD 1,234.56', money_format('%i', $number));
        $number = -1234.5672;
        $this->assertEquals('($        1,234.57)', money_format('%(#10n', $number));
        $this->assertEquals('($********1,234.57)', money_format('%=*(#10.2n', $number));
    }
}
