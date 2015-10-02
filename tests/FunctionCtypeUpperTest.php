<?php

/**
 * Class FunctionCtypeUpperTest
 * @link http://php.net/manual/en/function.ctype-upper.php
 */
class FunctionCtypeUpperTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioCtypeUpper()
    {
        $strings = array('AKLWC139', 'LMNSDO', 'akwSKWsm');
        $this->assertFalse(ctype_upper($strings[0]));
        $this->assertTrue(ctype_upper($strings[1]));
        $this->assertFalse(ctype_upper($strings[2]));
    }
}
