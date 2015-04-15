<?php

/**
 * Class FunctionStrnatcasecmpTest
 * @link http://php.net/manual/en/function.strnatcasecmp.php
 */
class FunctionStrnatcasecmpTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrnatcasecmp()
    {
        $this->assertEquals(0, strnatcasecmp("img12.png", "img12.PNG"));
        $this->assertEquals(-1, strnatcasecmp("img12.png", "img20.PNG"));
        $this->assertEquals(1, strnatcasecmp("img12.png", "img2.PNG"));
    }
}
