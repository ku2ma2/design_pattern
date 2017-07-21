<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/StringDisplay.php';

/**
 * Decorator StringDisplay Test
 */
final class DecoratorStringDisplayTest extends TestCase
{
    public function test_getColumns_文字数を返す()
    {
        $expected = 13;

        $disp = new \Decorator\StringDisplay("Hello, World.");
        $actual = $disp->getColumns();

        $this->assertEquals($expected, $actual);

        return $disp;
    }
    /**
     * @depends test_getColumns_文字数を返す
     */
    public function test_getRows_行数は1($disp)
    {
        $expected = 1; // 一行しかないので1

        $actual = $disp->getRows();

        $this->assertEquals($expected, $actual);

        return $disp;
    }
    /**
     * @depends test_getRows_行数は1
     */
    public function test_getRowText_指定行の文字列を返す($disp)
    {
        $expected = "Hello, World.";
        $actual = $disp->getRowText(0);

        $this->assertEquals($expected, $actual);
    }
}
