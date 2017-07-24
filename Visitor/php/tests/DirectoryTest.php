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
    // /**
    //  * @depends test_getName_名前を設定したら同じ名前を返す
    //  */
    // public function test_getSize_何も下位にない場合はサイズは0($dir)
    // {
    //     $expected = 0;

    //     $actual = $dir->getSize();

    //     $this->assertEquals($expected, $actual);
    //     return $dir;
    // }

    // public function test_ファイルとディレクトリを追加して結果表示する()
    // {
    //     $expected = '/root (30000)'."\n";
    //     $expected .= '/root/bin (30000)'."\n";
    //     $expected .= '/root/bin/vi (10000)'."\n";
    //     $expected .= '/root/bin/latex (20000)'."\n";
    //     $expected .= '/root/tmp (0)'."\n";

    //     $rootdir = new Dir("root");
    //     $bindir = new Dir("bin");
    //     $tmpdir = new Dir("tmp");

    //     $rootdir->add($bindir);
    //     $rootdir->add($tmpdir);

    //     $bindir->add(new File("vi", 10000));
    //     $bindir->add(new File("latex", 20000));

    //     $rootdir->printList();

    //     $this->expectOutputString($expected);
    // }
}
