<?php

require_once "IDCardFactory.php";

$factory = new IDCardFactory();

$card1 = $factory->create("山田太郎");
$card2 = $factory->create("伊藤二郎");
$card3 = $factory->create("佐藤花子");

$card1->use();
$card2->use();
$card3->use();
