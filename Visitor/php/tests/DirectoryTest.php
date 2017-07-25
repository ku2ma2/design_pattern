<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Directory.php';
require_once dirname(__DIR__) . '/File.php';

/**
 * Visitor Dir Test
 */
final class VisitorDirectoryTest extends TestCase
{
    public function test_getName_名前を設定したら同じ名前を返す()
    {
        $expected = 'folder';

        $dir = new \Visitor\Directory($name = 'folder');
        $actual = $dir->getName();

        $this->assertEquals($expected, $actual);
        return $dir;
    }
    /**
     * @depends test_getName_名前を設定したら同じ名前を返す
     */
    public function test_getSize_何も下位にない場合はサイズは0($dir)
    {
        $expected = 0;
        $actual = $dir->getSize();

        $this->assertEquals($expected, $actual);
        return $dir;
    }

    public function test_getSize_ファイルとディレクトリを追加してサイズを取得する()
    {
        $expected = 30000;

        $rootdir = new \Visitor\Directory("root");
        $bindir = new \Visitor\Directory("bin");
        $tmpdir = new \Visitor\Directory("tmp");

        $rootdir->add($bindir);
        $rootdir->add($tmpdir);

        $bindir->add(new \Visitor\File("vi", 10000));
        $bindir->add(new \Visitor\File("latex", 20000));

        $actual = $rootdir->getSize();

        $this->assertEquals($expected, $actual);
    }
}
