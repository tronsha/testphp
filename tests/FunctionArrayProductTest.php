<?php

/**
 * Class FunctionArrayProductTest
 * @link http://php.net/manual/en/function.array-product.php
 */
class FunctionArrayProductTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayProduct()
    {
        if (version_compare(phpversion(), '5.1.0', '>=') === true) {
            $a = array(2, 4, 6, 8);
            $this->assertEquals(384, array_product($a));
            $this->assertEquals(1, array_product(array()));
        } else {
            $this->markTestSkipped(phpversion() . ' < 5.1.0');
        }
    }
}
