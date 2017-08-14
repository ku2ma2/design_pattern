<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/CountDisplay.php';
require_once dirname(__DIR__) . '/StringDisplayImpl.php';

/**
 * Bridge CountDisplayTest
 */
final class BridgeCountDisplayTest extends TestCase
{
    public function test_StringDisplayImple_枠線を引く()
    {
        $expected = "";
        $expected .= "+-------------+\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "+-------------+\n";

        $disp = new CountDisplay(new StringDisplayImpl("Hello, Japan."));
        $disp->display();

        $this->expectOutputString($expected);

        return $disp;
    }
    /**
     * @depends test_StringDisplayImpleを使って枠線を引く
     */
    public function test_multiDisplay_５回繰り返して文字列を枠線内に出力($disp)
    {
        $expected = "";
        $expected .= "+-------------+\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "+-------------+\n";

        $disp->multiDisplay(5);

        $this->expectOutputString($expected);

        return $disp;
    }
}
