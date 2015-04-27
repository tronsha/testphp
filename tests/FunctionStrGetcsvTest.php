<?php

/**
 * Class FunctionStrGetcsvTest
 * @link http://php.net/manual/en/function.str-getcsv.php
 */
class FunctionStrGetcsvTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrGetcsv()
    {
        $csv = 'aaa,bbb,ccc,dddd';
        $this->assertEquals(array('aaa', 'bbb', 'ccc', 'dddd'), str_getcsv($csv));
    }
}
