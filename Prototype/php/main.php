<?php

require_once "Manager.php";

$manager = new Manager();

// 準備
$upen = new UnderlinePen('~');
$mbox = new MessageBox('*');
$sbox = new MessageBox('/');

$manager.register('strong message', $upen);
$manager.register('warning box', $mbox);
$manager.register('slash box', $sbox);

// 生成
$p1 = $manager->create("strong message");
$p1->use("Hello, world.");

$p2 = $manager->create("warning box");
$p2->use("Hello, world.");

$p3 = $manager->create("slash box");
$p3->use("Hello, world.");
