<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/File.php';

/**
 * File Test
 */
final class FileTest extends TestCase
{
    public function test_getName_名前を設定したら同じ名前を返す()
    {
        $file = new File($name = 'example.txt', $size = 1000);
        $actual = $file->getName();
        $expected = 'example.txt';

        $this->assertEquals($actual, $expected);
        return $file;
    }
    /**
     * @depends test_getName_名前を設定したら同じ名前を返す
     */
    public function test_getSize_でサイズを返す($file)
    {
        $actual = $file->getSize();
        $expected = 1000;

        $this->assertEquals($actual, $expected);
        return $file;
    }
}
