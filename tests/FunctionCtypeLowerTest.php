<?php

/**
 * Class FunctionCtypeLowerTest
 * @link http://php.net/manual/en/function.ctype-lower.php
 */
class FunctionCtypeLowerTest extends PHPUnit_Framework_TestCase
{
    public function testFunctioCtypeLower()
    {
        $strings = array('aac123', 'qiutoas', 'QASsdks');
        $this->assertFalse(ctype_lower($strings[0]));
        $this->assertTrue(ctype_lower($strings[1]));
        $this->assertFalse(ctype_lower($strings[2]));
    }
}
