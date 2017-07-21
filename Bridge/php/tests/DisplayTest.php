<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Display.php';
require_once dirname(__DIR__) . '/StringDisplayImpl.php';

/**
 * Bridge DisplayTest
 */
final class BridgeDisplayTest extends TestCase
{
    public function test_StringDisplayImpleを使って枠線を引く()
    {
        $expected = "";
        $expected .= "+-------------+\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "+-------------+\n";

        $disp = new Display(new StringDisplayImpl("Hello, Japan."));
        $disp->display();

        $this->expectOutputString($expected);

        return $disp;
    }
}
