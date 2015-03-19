<?php

/**
 * Class FunctionConvertUuencodeTest
 * @link http://php.net/manual/en/function.convert-uudecode.php
 */
class FunctionConvertUuencodeTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionConvertUuencode()
    {
        $this->assertEquals("+22!L;W9E(%!(4\"$`\n`\n", convert_uuencode('I love PHP!'));
    }
}
