<?php

/**
 * Class FunctionLocaleconvTest
 * @link http://php.net/manual/en/function.localeconv.php
 */
class FunctionLocaleconvTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        if (false === setlocale(LC_ALL, 'nl_NL.UTF-8@euro')) {
            $this->markTestSkipped('setlocale return false');
        }
    }

    public function testFunctionLocaleconv()
    {
        $locale_info = localeconv();
        $this->assertEquals('EUR', $locale_info['int_curr_symbol']);
    }
}
