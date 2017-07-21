<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/MessageBox.php';

/**
 * Prototype MessageBox Test
 */
final class PrototypeMessageBoxTest extends TestCase
{
    public function testUse()
    {
        $expected = "*********\n";
        $expected .= "* Hello *\n";
        $expected .= "*********\n";

        $upen = new \prototype\MessageBox("*");
        $upen->use("Hello");

        $this->expectOutputString($expected);
    }
}
