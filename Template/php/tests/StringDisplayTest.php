<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/StringDisplay.php';

/**
 * StringDisplay Test
 */
final class StringDisplayTest extends TestCase
{
    public function testDisplay()
    {
        $d = new StringDisplay('Hello, World');

        $d->display();
        $expected = "+------------+\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "+------------+\n";
        $this->expectOutputString($expected);
    }
}
