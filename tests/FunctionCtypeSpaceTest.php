<?php

/**
 * Class FunctionCtypeSpaceTest
 * @link http://php.net/manual/en/function.ctype-space.php
 */
class FunctionCtypeSpaceTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioCtypeSpace()
    {
        $strings = array("\n\r\t", "\narf12", '\n\r\t');
        $this->assertTrue(ctype_space($strings[0]));
        $this->assertFalse(ctype_space($strings[1]));
        $this->assertFalse(ctype_space($strings[2]));
    }
}
