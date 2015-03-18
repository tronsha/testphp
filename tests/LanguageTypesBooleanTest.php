<?php

/**
 * Class LanguageTypesBooleanTest
 * @link http://php.net/manual/en/language.types.boolean.php
 */
class LanguageTypesBooleanTest extends PHPUnit_Framework_TestCase
{
    public function testLanguageTypesBoolean()
    {
        $this->assertFalse((bool) "");
        $this->assertTrue((bool) 1);
        $this->assertTrue((bool) -2);
        $this->assertTrue((bool) "foo");
        $this->assertTrue((bool) 2.3e5);
        $this->assertTrue((bool) array(12));
        $this->assertFalse((bool) array());
        $this->assertTrue((bool) "false");
    }
}
