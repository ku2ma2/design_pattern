<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/File.php';
/**
 * Command File Test
 */
final class CommandFileTest extends TestCase
{
    public function test_getName_名前を取得する()
    {
        $expected = '太郎';

        $file = new \Command\File('太郎');
        $actual = $file->getName();
        $this->assertEquals($expected, $actual);
    }
    final public function test_decompress_解凍展開する()
    {
        $expected = "次郎を展開しました\n";

        $file = new \Command\File('次郎');
        $actual = $file->decompress();

        $this->expectOutputString($expected);
    }
    final public function test_compress_圧縮する()
    {
        $expected = "三郎を圧縮しました\n";

        $file = new \Command\File('三郎');
        $actual = $file->compress();

        $this->expectOutputString($expected);
    }
    final public function test_create_作成する()
    {
        $expected = "四郎を作成しました\n";

        $file = new \Command\File('四郎');
        $actual = $file->create();

        $this->expectOutputString($expected);
    }
}
