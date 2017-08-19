<?php

require_once __DIR__ . '/ChatSocial.php';
require_once __DIR__ . '/UserDefault.php';
require_once __DIR__ . '/UserAdmin.php';

$chatroom = new \Mediator\ChatSocial();

$oni = new \Mediator\UserAdmin('鬼瓦');

$sasaki = new \Mediator\UserDefault('佐々木');
$suzuki = new \Mediator\UserDefault('鈴木');
$kawamura = new \Mediator\UserDefault('川村');
$tajima = new \Mediator\UserDefault('田島');

$chatroom->login($oni);
$chatroom->login($sasaki);
$chatroom->login($suzuki);
$chatroom->login($kawamura);
$chatroom->login($tajima);

$sasaki->sendMessage('鈴木', '来週の予定は？') ;
$suzuki->sendMessage('川村', '秘密です') ;
$tajima->sendMessage('萩原', 'お邪魔してます') ;
$kawamura->sendMessage('田島', '私事で恐縮ですが…') ;
$oni->sendMessage('川村', '私事はお控えください');
