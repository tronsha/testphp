<?php

/**
 * Class FunctionStrIreplaceTest
 * @link http://php.net/manual/en/function.str-ireplace.php
 */
class FunctionStrIreplaceTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrIreplace()
    {
        $bodytag = str_ireplace("%body%", "black", "<body text=%BODY%>");
        $this->assertEquals('<body text=black>', $bodytag);
    }
}
