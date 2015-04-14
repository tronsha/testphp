<?php

/**
 * Class FunctionStrstrTest
 * @link http://php.net/manual/en/function.strstr.php
 */
class FunctionStrstrTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrstr()
    {
        $email  = 'name@example.com';
        $domain = strstr($email, '@');
        $this->assertEquals('@example.com', $domain);
    }

    /**
     * @requires PHP 5.3
     */
    public function testFunctionStrstrBeforeNeedle()
    {
        if (version_compare(phpversion(), '5.3.0', '>=') === true) {
            $email  = 'name@example.com';
            $user = strstr($email, '@', true);
            $this->assertEquals('name', $user);
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.3.0');
        }
    }
}
