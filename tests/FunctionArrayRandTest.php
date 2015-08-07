<?php

/**
 * Class FunctionArrayRandTest
 * @link http://php.net/manual/en/function.array-rand.php
 */
class FunctionArrayRandTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionArrayRand()
    {
        $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
        $rand_keys = array_rand($input, 2);
        $this->assertContains($input[$rand_keys[0]], $input);
        $this->assertContains($input[$rand_keys[1]], $input);
        $this->assertCount(2, $rand_keys);
        $this->assertGreaterThanOrEqual(0, $rand_keys[0]);
        $this->assertGreaterThanOrEqual(0, $rand_keys[1]);
        $this->assertLessThanOrEqual(4, $rand_keys[0]);
        $this->assertLessThanOrEqual(4, $rand_keys[1]);
    }
}
