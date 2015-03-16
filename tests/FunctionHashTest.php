<?php

/**
 * Class FunctionHashTest
 * @link http://php.net/manual/en/function.hash.php
 */
class FunctionHashTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHash()
    {
        if (version_compare(phpversion(), '5.1.2', '>=') === true) {
            $this->assertEquals('ec457d0a974c48d5685a7efa03d137dc8bbde7e3', hash('ripemd160', 'The quick brown fox jumped over the lazy dog.'));
        }
    }
}
