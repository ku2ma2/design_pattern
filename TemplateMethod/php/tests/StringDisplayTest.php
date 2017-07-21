<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/StringDisplay.php';

/**
 * TemplateMethodStringDisplay Test
 */
final class TemplateMethodStringDisplayTest extends TestCase
{
    public function testDisplay()
    {
        $expected = "+------------+\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "|Hello, World|\n";
        $expected .= "+------------+\n";

        $d = new StringDisplay('Hello, World');
        $d->display();

        $this->expectOutputString($expected);
    }
}
