<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Manager.php';
require_once dirname(__DIR__) . '/UnderlinePen.php';
require_once dirname(__DIR__) . '/MessageBox.php';

/**
 * Manager Test
 */
final class ManegerTest extends TestCase
{
    public function testUndelineTest()
    {
        $manager = new \prototype\Manager();

        // 下線機能をManagerに登録
        $upen = new \prototype\UnderlinePen('~');
        $manager->register('strong message', $upen);
        $p1 = $manager->create("strong message");

        $p1->use("Hello, world.");

        $expected = "\"Hello, world.\"\n";
        $expected .= "~~~~~~~~~~~~~\n";
        $this->expectOutputString($expected);

        return $manager;
    }
    /**
     * @depends testUndelineTest
     */
    public function testMessageBoxTest($manager)
    {

        // 枠飾り 機能をManagerに登録
        $mbox = new \prototype\MessageBox('*');
        $manager->register('warning box', $mbox);
        $p2 = $manager->create("warning box");

        $p2->use("Hello");

        $expected = "*********\n";
        $expected .= "* Hello *\n";
        $expected .= "*********\n";
        $this->expectOutputString($expected);
    }
}
