<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Manager.php';
require_once dirname(__DIR__) . '/UnderlinePen.php';
require_once dirname(__DIR__) . '/MessageBox.php';

/**
 * Prototype Manager Test
 */
final class PrototypeManegerTest extends TestCase
{
    public function testUndelineTest()
    {
        $expected = "\"Hello, world.\"\n";
        $expected .= "~~~~~~~~~~~~~\n";

        $manager = new \prototype\Manager();

        // 下線機能をManagerに登録
        $upen = new \prototype\UnderlinePen('~');
        $manager->register('strong message', $upen);
        $p1 = $manager->create("strong message");

        $p1->use("Hello, world.");

        $this->expectOutputString($expected);

        return $manager;
    }
    /**
     * @depends testUndelineTest
     */
    public function testMessageBoxTest($manager)
    {
        $expected = "*********\n";
        $expected .= "* Hello *\n";
        $expected .= "*********\n";

        // 枠飾り 機能をManagerに登録
        $mbox = new \prototype\MessageBox('*');
        $manager->register('warning box', $mbox);
        $p2 = $manager->create("warning box");

        $p2->use("Hello");

        $this->expectOutputString($expected);
    }
}
