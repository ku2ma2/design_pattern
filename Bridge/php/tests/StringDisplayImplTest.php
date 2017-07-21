<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/StringDisplayImpl.php';
require_once dirname(__DIR__) . '/DisplayImpl.php';

/**
 * Bridge StringDisplayImplTest
 */
final class BridgeStringDisplayImplTest extends TestCase
{
    public function test_rawOpenで与えられた文字列の長さの枠線を引く()
    {
        $expected = "+-------------+\n";

        $disp = new StringDisplayImpl("Hello, Japan.");
        $disp->rawOpen();

        $this->expectOutputString($expected);

        return $disp;
    }
    /**
     * @depends test_rawOpenで与えられた文字列の長さの枠線を引く
     */
    public function test_rawPrintで与えられた文字列の前後に文字を追加して表示($disp)
    {
        $expected = "|Hello, Japan.|\n";

        $disp->rawPrint();

        $this->expectOutputString($expected);

        return $disp;
    }
    /**
     * @depends test_rawPrintで与えられた文字列の前後に文字を追加して表示
     */
    public function test_rawCloseで与えられた文字列の長さの枠線を引く($disp)
    {
        $expected = "+-------------+\n";

        $disp->rawClose();

        $this->expectOutputString($expected);
    }
}
