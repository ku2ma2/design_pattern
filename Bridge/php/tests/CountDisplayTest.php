<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/CountDisplay.php';
require_once dirname(__DIR__) . '/StringDisplayImpl.php';

/**
 * CountDisplayTest
 */
final class CountDisplayTest extends TestCase
{
    public function test_StringDisplayImpleを使って枠線を引く()
    {
        $disp = new CountDisplay(new StringDisplayImpl("Hello, Japan."));
        $disp->display();

        $expected = "";
        $expected .= "+-------------+\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "+-------------+\n";

        $this->expectOutputString($expected);

        return $disp;
    }
    /**
     * @depends test_StringDisplayImpleを使って枠線を引く
     */
    public function test_multiDisplayで５回繰り返して文字列を枠線内に出力($disp)
    {
        $disp->multiDisplay(5);

        $expected = "";
        $expected .= "+-------------+\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "+-------------+\n";

        $this->expectOutputString($expected);

        return $disp;
    }
}
