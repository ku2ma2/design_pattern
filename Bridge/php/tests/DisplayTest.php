<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Display.php';
require_once dirname(__DIR__) . '/StringDisplayImpl.php';

/**
 * DisplayTest
 */
final class DisplayTest extends TestCase
{
    public function test_StringDisplayImpleを使って枠線を引く()
    {
        $disp = new Display(new StringDisplayImpl("Hello, Japan."));
        $disp->display();

        $expected = "";
        $expected .= "+-------------+\n";
        $expected .= "|Hello, Japan.|\n";
        $expected .= "+-------------+\n";

        $this->expectOutputString($expected);

        return $disp;
    }
}
