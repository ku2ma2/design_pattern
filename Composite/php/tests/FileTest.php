<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/File.php';

/**
 * Coposite File Test
 */
final class CompositeFileTest extends TestCase
{
    public function test_getName_名前を設定したら同じ名前を返す()
    {
        $expected = 'example.txt';

        $file = new File($name = 'example.txt', $size = 1000);
        $actual = $file->getName();

        $this->assertEquals($expected, $actual);
        return $file;
    }
    /**
     * @depends test_getName_名前を設定したら同じ名前を返す
     */
    public function test_getSize_でサイズを返す($file)
    {
        $expected = 1000;

        $actual = $file->getSize();

        $this->assertEquals($expected, $actual);
        return $file;
    }
}
