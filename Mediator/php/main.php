<?php

require_once __DIR__ . '/ChatSocial.php';
require_once __DIR__ . '/UserDefault.php';

$chatroom = new \Mediator\ChatSocial();

$sasaki = new \Mediator\UserDefault('佐々木');
$suzuki = new \Mediator\UserDefault('鈴木');
$yoshida = new \Mediator\UserDefault('吉田');
$kawamura = new \Mediator\UserDefault('川村');
$tajima = new \Mediator\UserDefault('田島');

$chatroom->login($sasaki);
$chatroom->login($suzuki);
$chatroom->login($yoshida);
$chatroom->login($kawamura);
$chatroom->login($tajima);

$sasaki->sendMessage('鈴木', '来週の予定は？') ;
$suzuki->sendMessage('川村', '秘密です') ;
$yoshida->sendMessage('萩原', '元気ですか？') ;
$tajima->sendMessage('佐々木', 'お邪魔してます') ;
$kawamura->sendMessage('吉田', '私事で恐縮ですが…') ;
