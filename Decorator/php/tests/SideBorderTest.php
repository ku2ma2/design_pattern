<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/SideBorder.php';
require_once dirname(__DIR__) . '/StringDisplay.php';

/**
 * SideBorder Test
 */
final class SideBorderTest extends TestCase
{
    public function test_getColumns_文字数は中身の両側に飾り文字分を加えたもの()
    {
        $disp = new \Decorator\StringDisplay("Hello, World.");
        $sideborder = new \Decorator\SideBorder($disp, $ch = '*');
        $actual = $sideborder->getColumns();
        $expected = 15;

        $this->assertEquals($actual, $expected);

        return $sideborder;
    }
    /**
     * @depends test_getColumns_文字数は中身の両側に飾り文字分を加えたもの
     */
    public function test_getRows_行数は中身の行数と同じ($sideborder)
    {
        $actual = $sideborder->getRows();
        $expected = 1; // 一行しかないので1

        $this->assertEquals($actual, $expected);

        return $sideborder;
    }
    /**
     * @depends test_getRows_行数は中身の行数と同じ
     */
    public function test_getRowText_中身の指定業の両側に飾り文字をつけたもの($sideborder)
    {
        $actual = $sideborder->getRowText(0);
        $expected = '*Hello, World.*';

        $this->assertEquals($actual, $expected);
        return $sideborder;
    }
    /**
     * @depends test_getRowText_中身の指定業の両側に飾り文字をつけたもの
     */
    public function test_show_出来上がったテキストの表示($sideborder)
    {
        $actual = $sideborder->show();
        $expected = '*Hello, World.*'."\n";

        $this->expectOutputString($expected);
    }
}
