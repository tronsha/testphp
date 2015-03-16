<?php

/**
 * Class FunctionHashCopyTest
 * @link http://php.net/manual/en/function.hash-copy.php
 */
class FunctionHashCopyTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionHashCopy()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $context = hash_init("md5");
            hash_update($context, "data");
            $copy_context = hash_copy($context);
            $this->assertEquals('8d777f385d3dfec8815d20f7496026dc', hash_final($context));
            hash_update($copy_context, "data");
            $this->assertEquals('511ae0b1c13f95e5f08f1a0dd3da3d93', hash_final($copy_context));
        }
    }
}
