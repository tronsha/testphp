<?php

/**
 * Class FunctionCtypePunctTest
 * @link http://php.net/manual/en/function.ctype-punct.php
 */
class FunctionCtypePunctTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioCtypePunct()
    {
        $strings = array('ABasdk!@!$#', '!@ # $', '*&$()');
        $this->assertFalse(ctype_punct($strings[0]));
        $this->assertFalse(ctype_punct($strings[1]));
        $this->assertTrue(ctype_punct($strings[2]));
    }
}
