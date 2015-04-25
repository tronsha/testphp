<?php

/**
 * Class FunctionStrPadTest
 * @link http://php.net/manual/en/function.str-pad.php
 */
class FunctionStrPadTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrPad()
    {
        $input = "Alien";
        $this->assertEquals('Alien     ', str_pad($input, 10));
        $this->assertEquals('-=-=-Alien', str_pad($input, 10, "-=", STR_PAD_LEFT));
        $this->assertEquals('__Alien___', str_pad($input, 10, "_", STR_PAD_BOTH));
        $this->assertEquals('Alien_', str_pad($input, 6 , "___"));
    }
}
