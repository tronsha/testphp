<?php

/**
 * Class FunctionSha1Test
 * @link http://php.net/manual/en/function.sha1.php
 */
class FunctionSha1Test extends PHPUnit_Framework_TestCase
{
    public function testFunctionSha1()
    {
        $str = 'apple';
        $this->assertEquals('d0be2dc421be4fcd0172e5afceea3970e2f3d940', sha1($str));
    }
}
