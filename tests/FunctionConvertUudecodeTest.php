<?php

/**
 * Class FunctionConvertUudecodeTest
 * @link http://php.net/manual/en/function.convert-uudecode.php
 */
class FunctionConvertUudecodeTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionConvertUudecode()
    {
        $this->assertEquals('I love PHP!', convert_uudecode("+22!L;W9E(%!(4\"$`\n`\n"));
    }
}
