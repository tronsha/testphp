<?php

/**
 * Class LanguageTypesIntroTest
 * @link http://php.net/manual/en/language.types.boolean.php
 */
class LanguageTypesIntroTest extends PHPUnit_Framework_TestCase
{
    public function testLanguageTypesIntro()
    {
        $a_bool = true;
        $a_str = "foo";
        $a_str2 = 'foo';
        $an_int = 12;

        $this->assertEquals('boolean', gettype($a_bool));
        $this->assertEquals('string', gettype($a_str));

        $this->assertTrue(is_int($an_int));
        $this->assertFalse(is_string($a_bool));
    }
}
