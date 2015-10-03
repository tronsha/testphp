<?php

/**
 * Class FunctionCtypeXdigitTest
 * @link http://php.net/manual/en/function.ctype-xdigit.php
 */
class FunctionCtypeXdigitTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioCtypeXdigit()
    {
        $strings = array('AB10BC99', 'AR1012', 'ab12bc99');
        $this->assertTrue(ctype_xdigit($strings[0]));
        $this->assertFalse(ctype_xdigit($strings[1]));
        $this->assertTrue(ctype_xdigit($strings[2]));
    }
}
