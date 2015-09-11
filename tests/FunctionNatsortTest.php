<?php

/**
 * Class FunctionNatsortTest
 * @link http://php.net/manual/en/function.natsort.php
 */
class FunctionNatsortTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionNatsort()
    {
        $array = array("img12.png", "img10.png", "img2.png", "img1.png");
        natsort($array);
        $this->expectOutputString("3 = img1.png\n2 = img2.png\n1 = img10.png\n0 = img12.png\n");
        foreach ($array as $key => $val) {
            echo "$key = $val\n";
        }
    }

    public function testFunctionNatsortNegativeNumbers()
    {
        $negative = array('-5','3','-2','0','-1000','9','1');
        natsort($negative);
        $this->expectOutputString("2 = -2\n0 = -5\n4 = -1000\n3 = 0\n6 = 1\n1 = 3\n5 = 9\n");
        foreach ($negative as $key => $val) {
            echo "$key = $val\n";
        }
    }

    public function testFunctionNatsortZeroPadding()
    {
        if (version_compare(phpversion(), '5.2.10', '>=') === true) {
            $zeros = array('09', '8', '10', '009', '011', '0');
            natsort($zeros);
            $this->expectOutputString("5 = 0\n1 = 8\n3 = 009\n0 = 09\n2 = 10\n4 = 011\n");
            foreach ($zeros as $key => $val) {
                echo "$key = $val\n";
            }
        } else {
            $info = phpversion() . ' < 5.2.10';
        }
    }
}
