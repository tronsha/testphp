<?php

/**
 * Class FunctionChunkSplitTest
 * @link http://php.net/manual/en/function.chunk-split.php
 */
class FunctionChunkSplitTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionChunkSplit()
    {
        $data =
            "Humpty Dumpty sat on a wall,\r\n" .
            "Humpty Dumpty had a great fall,\r\n" .
            "All the King’s horses and all the King’s men,\r\n" .
            "Couldn’t put Humpty together again.";
        $output =
            "SHVtcHR5IER1bXB0eSBzYXQgb24gYSB3YWxsLA0KSHVtcHR5IER1bXB0eSBoYWQgYSBncmVhdCBm\r\n" .
            "YWxsLA0KQWxsIHRoZSBLaW5n4oCZcyBob3JzZXMgYW5kIGFsbCB0aGUgS2luZ+KAmXMgbWVuLA0K\r\n" .
            "Q291bGRu4oCZdCBwdXQgSHVtcHR5IHRvZ2V0aGVyIGFnYWluLg==\r\n";
        $new_string = chunk_split(base64_encode($data));
        $this->assertEquals($output, $new_string);
    }
}
