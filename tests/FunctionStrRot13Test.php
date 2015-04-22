<?php

/**
 * Class FunctionStrRot13Test
 * @link http://php.net/manual/en/function.str-rot13.php
 */
class FunctionStrRot13Test extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrRot13()
    {
        $this->assertEquals('CUC 4.3.0', str_rot13('PHP 4.3.0'));
    }
}
