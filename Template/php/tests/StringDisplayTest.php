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
        $d2 = new StringDisplay('Hello, World');
        $d3 = new StringDisplay('こんにちは!');

        ob_start();
        $d2->display();
        $actual = ob_get_clean();
        $expected = "+------------+\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "+------------+\n";
        $this->assertEquals($expected, $actual);

        ob_start();
        $d3->display();
        $actual = ob_get_clean();
        $expected = "+------+\n";
        $expected .= "|こんにちは!|\n";
        $expected .= "|こんにちは!|\n";
        $expected .= "|こんにちは!|\n";
        $expected .= "|こんにちは!|\n";
        $expected .= "|こんにちは!|\n";
        $expected .= "+------+\n";
        $this->assertEquals($expected, $actual);
    }
}
