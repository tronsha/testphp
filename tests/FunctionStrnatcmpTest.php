<?php

/**
 * Class FunctionStrnatcmpTest
 * @link http://php.net/manual/en/function.strnatcmp.php
 */
class FunctionStrnatcmpTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionStrnatcmp()
    {
        $arr1 = $arr2 = array("img12.png", "img10.png", "img2.png", "img1.png");
        usort($arr1, "strcmp");
        usort($arr2, "strnatcmp");
        $this->assertEquals('img1.png,img10.png,img12.png,img2.png', implode(',', $arr1));
        $this->assertEquals('img1.png,img2.png,img10.png,img12.png', implode(',', $arr2));
    }
}
