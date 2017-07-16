<?php

require_once "Dir.php";
require_once "File.php";

echo "Making root entries\n";

$rootdir = new Dir("root");
$bindir = new Dir("bin");
$tmpdir = new Dir("tmp");
$usrdir = new Dir("usr");


$rootdir->add($bindir);
$rootdir->add($tmpdir);
$rootdir->add($usrdir);

$bindir->add(new File("vi", 10000));
$bindir->add(new File("latex", 20000));

$rootdir->printList();

echo "\n";
echo "Making user entries\n";
$yuki = new Dir("yuki");
$hanako = new Dir("hanako");
$tomura = new Dir("tomura");

$usrdir->add($yuki);
$usrdir->add($hanako);
$usrdir->add($tomura);

$yuki->add(new File("diary.html", 100));
$yuki->add(new File("Composite.java", 200));
$hanako->add(new File("memo.tex", 300));
$tomura->add(new File("game.doc", 400));
$tomura->add(new File("junk.mail", 500));

$rootdir->printList();
