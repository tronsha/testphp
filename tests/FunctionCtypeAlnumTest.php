<?php

/**
 * Class FunctionCtypeAlnumTest
 * @link http://php.net/manual/en/function.ctype-alnum.php
 */
class FunctionCtypeAlnumTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioCtypeAlnum()
    {
        $strings = array('AbCd1zyZ9', 'foo!#$bar');
        $this->assertTrue(ctype_alnum($strings[0]));
        $this->assertFalse(ctype_alnum($strings[1]));
    }
}
