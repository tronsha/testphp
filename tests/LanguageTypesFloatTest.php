<?php

/**
 * Class LanguageTypesFloatTest
 * @link http://php.net/manual/en/language.types.float.php
 */
class LanguageTypesFloatTest extends PHPUnit_Framework_TestCase
{
    public function testLanguageTypesFloat()
    {
        $a = 1.23456789;
        $b = 1.23456780;
        $epsilon = 0.00001;
        $this->assertTrue(abs($a - $b) < $epsilon);
    }
}
