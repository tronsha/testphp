<?php

/**
 * Class FunctionCtypeCntrlTest
 * @link http://php.net/manual/en/function.ctype-cntrl.php
 */
class FunctionCtypeCntrlTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioCtypeCntrl()
    {
        $strings = array("\n\r\t", 'arf12');
        $this->assertTrue(ctype_cntrl($strings[0]));
        $this->assertFalse(ctype_cntrl($strings[1]));
    }
}
