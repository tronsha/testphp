<?php

/**
 * Class FunctionCtypePrintTest
 * @link http://php.net/manual/en/function.ctype-print.php
 */
class FunctionCtypePrintTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioCtypePrint()
    {
        $strings = array("asdf\n\r\t", 'arf12', 'LKA#@%.54');
        $this->assertFalse(ctype_print($strings[0]));
        $this->assertTrue(ctype_print($strings[1]));
        $this->assertTrue(ctype_print($strings[2]));
    }
}
