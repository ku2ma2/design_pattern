<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/SideBorder.php';
require_once dirname(__DIR__) . '/StringDisplay.php';

/**
 * Decorator SideBorder Test
 */
final class DecoratorSideBorderTest extends TestCase
{
    public function test_getColumns_文字数は中身の両側に飾り文字分を加えたもの()
    {
        $expected = 15;

        $disp = new \Decorator\StringDisplay("Hello, World.");
        $sideborder = new \Decorator\SideBorder($disp, $ch = '*');
        $actual = $sideborder->getColumns();

        $this->assertEquals($expected, $actual);

        return $sideborder;
    }
    /**
     * @depends test_getColumns_文字数は中身の両側に飾り文字分を加えたもの
     */
    public function test_getRows_行数は中身の行数と同じ($sideborder)
    {
        $expected = 1; // 一行しかないので1
        $actual = $sideborder->getRows();

        $this->assertEquals($expected, $actual);

        return $sideborder;
    }
    /**
     * @depends test_getRows_行数は中身の行数と同じ
     */
    public function test_getRowText_中身の指定業の両側に飾り文字をつけたもの($sideborder)
    {
        $expected = '*Hello, World.*';
        $actual = $sideborder->getRowText(0);

        $this->assertEquals($expected, $actual);
        return $sideborder;
    }
    /**
     * @depends test_getRowText_中身の指定業の両側に飾り文字をつけたもの
     */
    public function test_show_出来上がったテキストの表示($sideborder)
    {
        $expected = '*Hello, World.*'."\n";
        $actual = $sideborder->show();

        $this->expectOutputString($expected);
    }
}
