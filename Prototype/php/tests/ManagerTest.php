<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Manager.php';
require_once dirname(__DIR__) . '/UnderlinePen.php';
require_once dirname(__DIR__) . '/MessageBox.php';

/**
 * UnderlinePen Test
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

        ob_start();
        $p1->use("Hello, world.");
        $actual = ob_get_clean();

        $expected = "\"Hello, world.\"\n";
        $expected .= "~~~~~~~~~~~~~\n";

        $this->assertEquals($expected, $actual);

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

        ob_start();
        $p2->use("Hello");
        $actual = ob_get_clean();

        $expected = "*********\n";
        $expected .= "* Hello *\n";
        $expected .= "*********\n";

        $this->assertEquals($expected, $actual);
    }
}
