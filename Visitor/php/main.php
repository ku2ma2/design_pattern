<?php

require_once __DIR__."/Directory.php";
require_once __DIR__."/File.php";
require_once __DIR__."/ListVisitor.php";

echo "Making root entries\n";

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

echo "\n";
echo "Making user entries\n";

$yuki = new \Visitor\Directory("yuki");
$hanako = new \Visitor\Directory("hanako");
$tomura = new \Visitor\Directory("tomura");

$usrdir->add($yuki);
$usrdir->add($hanako);
$usrdir->add($tomura);

$yuki->add(new \Visitor\File("diary.html", 100));
$yuki->add(new \Visitor\File("Composite.java", 200));
$hanako->add(new \Visitor\File("memo.tex", 300));
$tomura->add(new \Visitor\File("game.doc", 400));
$tomura->add(new \Visitor\File("junk.mail", 500));

$rootdir->accept(new \Visitor\ListVisitor());
