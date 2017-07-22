<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/FullBorder.php';
require_once dirname(__DIR__) . '/StringDisplay.php';

/**
 * Decorator FullBorder Test
 */
final class DecoratorFullBorderTest extends TestCase
{
    public function test_getColumns_文字数は中身の両側に飾り文字分を加えたもの()
    {
        $expected = 15;
        $disp = new \Decorator\StringDisplay("Hello, World.");
        $fullborder = new \Decorator\FullBorder($disp);
        $actual = $fullborder->getColumns();

        $this->assertEquals($expected, $actual);

        return $fullborder;
    }
    /**
     * @depends test_getColumns_文字数は中身の両側に飾り文字分を加えたもの
     */
    public function test_getRows_行数は中身の行数に2足したもの($fullborder)
    {
        $expected = 3; // 上下にあるので3
        $actual = $fullborder->getRows();

        $this->assertEquals($expected, $actual);

        return $fullborder;
    }
    /**
     * @depends test_getRows_行数は中身の行数に2足したもの
     */
    public function test_getRowText_1行目は枠線を表示する($fullborder)
    {
        $expected = '+-------------+';
        $actual = $fullborder->getRowText(0);

        $this->assertEquals($expected, $actual);
        return $fullborder;
    }
    /**
     * @depends test_getRowText_1行目は枠線を表示する
     */
    public function test_getRowText_2行目は中身を表示する($fullborder)
    {
        $expected = '|Hello, World.|';
        $actual = $fullborder->getRowText(1);

        $this->assertEquals($expected, $actual);
        return $fullborder;
    }
    /**
     * @depends test_getRowText_2行目は中身を表示する
     */
    public function test_show_出来上がったテキストの表示($fullborder)
    {
        $expected = '+-------------+'."\n";
        $expected .= '|Hello, World.|'."\n";
        $expected .= '+-------------+'."\n";

        $actual = $fullborder->show();

        $this->expectOutputString($expected);
    }
}
