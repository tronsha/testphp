<?php

/**
 * Class LanguageTypesIntegerTest
 * @link http://php.net/manual/en/language.types.integer.php
 */
class LanguageTypesIntegerTest extends PHPUnit_Framework_TestCase
{
    public function testLanguageTypesInteger()
    {
        $this->assertEquals(3.5714285714286, 25 / 7);
        $this->assertEquals(3, (int)(25 / 7));
        $this->assertEquals(4, round(25 / 7));
        $this->assertEquals(7, (int)((0.1 + 0.7) * 10));
    }
}
