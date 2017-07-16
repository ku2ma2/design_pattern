<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Dir.php';

/**
 * Dir Test
 */
final class DirTest extends TestCase
{
    public function test_getName_名前を設定したら同じ名前を返す()
    {
        $dir = new Dir($name = 'folder');
        $actual = $dir->getName();
        $expected = 'folder';

        $this->assertEquals($actual, $expected);
        return $dir;
    }
    /**
     * @depends test_getName_名前を設定したら同じ名前を返す
     */
    public function test_getSize_何も下位にない場合はサイズは0($dir)
    {
        $actual = $dir->getSize();
        $expected = 0;

        $this->assertEquals($actual, $expected);
        return $dir;
    }
}
