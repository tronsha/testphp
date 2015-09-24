<?php

/**
 * Class FunctionCtypeAlphaTest
 * @link http://php.net/manual/en/function.ctype-alpha.php
 */
class FunctionCtypeAlphaTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioCtypeAlpha()
    {
        $strings = array('KjgWZC', 'arf12');
        $this->assertTrue(ctype_alpha($strings[0]));
        $this->assertFalse(ctype_alpha($strings[1]));
    }
}
