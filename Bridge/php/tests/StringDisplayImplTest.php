<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/StringDisplayImpl.php';
require_once dirname(__DIR__) . '/DisplayImpl.php';

/**
 * StringDisplayImplTest
 */
final class StringDisplayImplTest extends TestCase
{
    public function test_rawOpenで与えられた文字列の長さの枠線を引く()
    {
        $disp = new StringDisplayImpl("Hello, Japan.");
        $disp->rawOpen();

        $expected = "+-------------+\n";
        $this->expectOutputString($expected);

        return $disp;
    }
    /**
     * @depends test_rawOpenで与えられた文字列の長さの枠線を引く
     */
    public function test_rawPrintで与えられた文字列の前後に文字を追加して表示($disp)
    {
        $disp->rawPrint();

        $expected = "|Hello, Japan.|\n";
        $this->expectOutputString($expected);

        return $disp;
    }
    /**
     * @depends test_rawPrintで与えられた文字列の前後に文字を追加して表示
     */
    public function test_rawCloseで与えられた文字列の長さの枠線を引く($disp)
    {
        $disp->rawClose();

        $expected = "+-------------+\n";
        $this->expectOutputString($expected);
    }
}
