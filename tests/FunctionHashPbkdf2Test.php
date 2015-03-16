<?php

/**
 * Class FunctionHashPbkdf2Test
 * @link http://php.net/manual/en/function.hash-pbkdf2.php
 */
class FunctionHashPbkdf2Test extends PHPUnit_Framework_TestCase
{
    public function testFunctionHashPbkdf2()
    {
        if (version_compare(phpversion(), '5.5.0', '>=') === true) {
            $password = "password";
            $iterations = 1000;
            $salt = mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
            $hash = hash_pbkdf2("sha256", $password, $salt, $iterations, 20);
            $this->assertEquals(strlen('120fb6cffcf8b32c43e7'), strlen($hash));
        }
    }
}
