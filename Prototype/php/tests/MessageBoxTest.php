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

        ob_start();
        $upen->use("Hello");
        $actual = ob_get_clean();

        $expected = "*********\n";
        $expected .= "* Hello *\n";
        $expected .= "*********\n";

        $this->assertEquals($expected, $actual);
    }
}
