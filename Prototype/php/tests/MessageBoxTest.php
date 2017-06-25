<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/MessageBox.php';

/**
 * MessageBox Test
 */
final class MessageBoxTest extends TestCase
{
    public function testUse()
    {
        $upen = new \prototype\MessageBox("*");

        $upen->use("Hello");

        $expected = "*********\n";
        $expected .= "* Hello *\n";
        $expected .= "*********\n";
        $this->expectOutputString($expected);
    }
}
