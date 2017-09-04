<?php
// 参考: http://d.hatena.ne.jp/shimooka/20141219/1418965549

require_once __DIR__."/Login.php";

session_start();

// コンテキスト(Login) がセッションに設定されていなかったら初期化
$context = isset($_SESSION['context']) ? $_SESSION['context'] : null;
if (is_null($context)) {
    $context = new \State\Login('ほげ');
}

// modeの値によって処理を行なう
$mode = (isset($_GET['mode']) ? $_GET['mode'] : '');
switch ($mode) {
    case 'state':
        echo '<p style="color: #aa0000">状態を遷移します</p>';
        $context->switchState();
        break;
    case 'inc':
        echo '<p style="color: #008800">カウントアップします</p>';
        $context->incrementCount();
        break;
    case 'reset':
        echo '<p style="color: #008800">カウントをリセットします</p>';
        $context->resetCount();
        break;
}

// セッションに現状のContextを保存
$_SESSION['context'] = $context;

// 結果の表示
echo 'ようこそ、' . $context->getUserName() . 'さん<br>';
echo '現在、ログインして' . ($context->isAuthenticated() ? 'います' : 'いません') . '<br>';
echo '現在のカウント：' . $context->getCount() . '<br>';
echo $context->getMenu() . '<br>';
