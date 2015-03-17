<?php

/**
 * Class FunctionMd5Test
 * @link http://php.net/manual/en/function.md5.php
 */
class FunctionMd5Test extends PHPUnit_Framework_TestCase
{
    public function testFunctionMd5()
    {
        $this->assertEquals('1f3870be274f6c49b3e31a0c6728957f', md5('apple'));
    }
}
