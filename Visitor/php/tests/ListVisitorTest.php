<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Directory.php';
require_once dirname(__DIR__) . '/File.php';


/**
 * Visitor ListVisitor Test
 */
final class VisitorListVisitorTest extends TestCase
{
    public function test_visit_FileオブジェクトからListVisitorを呼び出すとフォーマット化()
    {
        $expected = "/example.txt (1000)\n";

        $file = new \Visitor\File($name = 'example.txt', $size = 1000);
        $file->accept(new \Visitor\ListVisitor());

        $this->expectOutputString($expected);
    }
    public function test_visit_Dirオブジェクトも含めてListVisitorを呼び出すとフォーマット化()
    {
        $expected = '';
        $expected .= "/root (30000)\n";
        $expected .= "/root/bin (30000)\n";
        $expected .= "/root/bin/vi (10000)\n";
        $expected .= "/root/bin/latex (20000)\n";
        $expected .= "/root/tmp (0)\n";
        $expected .= "/root/usr (0)\n";

        $rootdir = new \Visitor\Directory("root");
        $bindir = new \Visitor\Directory("bin");
        $tmpdir = new \Visitor\Directory("tmp");
        $usrdir = new \Visitor\Directory("usr");

        $rootdir->add($bindir);
        $rootdir->add($tmpdir);
        $rootdir->add($usrdir);

        $bindir->add(new \Visitor\File("vi", 10000));
        $bindir->add(new \Visitor\File("latex", 20000));

        $rootdir->accept(new \Visitor\ListVisitor());

        $this->expectOutputString($expected);
    }
}
