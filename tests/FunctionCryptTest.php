<?php

/**
 * Class FunctionCryptTest
 * @link http://php.net/manual/de/function.crypt.php
 */
class FunctionCryptTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionCrypt()
    {
        if (defined('CRYPT_STD_DES') === true) {
            $this->assertEquals('rl.3StKT.4T8M', crypt('rasmuslerdorf', 'rl'));
        }
        if (defined('CRYPT_EXT_DES') === true) {
            $this->assertEquals('_J9..rasmBYk8r9AiWNc', crypt('rasmuslerdorf', '_J9..rasm'));
        }
        if (defined('CRYPT_MD5') === true) {
            $this->assertEquals('$1$rasmusle$rISCgZzpwk3UhDidwXvin0', crypt('rasmuslerdorf', '$1$rasmusle$'));
        }
        if (defined('CRYPT_BLOWFISH') === true) {
            $this->assertEquals('$2a$07$usesomesillystringfore2uDLvp1Ii2e./U9C8sBjqp8I90dH6hi',
                crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$'));
        }
        if (defined('CRYPT_SHA256') === true) {
            $this->assertEquals('$5$rounds=5000$usesomesillystri$KqJWpanXZHKq2BOB43TSaYhEWsQ1Lr5QNyPCDH/Tp.6',
                crypt('rasmuslerdorf', '$5$rounds=5000$usesomesillystringforsalt$'));
        }
        if (defined('CRYPT_SHA512') === true) {
            $this->assertEquals('$6$rounds=5000$usesomesillystri$D4IrlXatmP7rx3P3InaxBeoomnAihCKRVQP22JZ6EY47Wc6BkroIuUUBOov1i.S5KPgErtP/EN5mcO.ChWQW21',
                crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$'));
        }
    }
}
