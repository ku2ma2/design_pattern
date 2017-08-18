<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/UserDefault.php';
require_once dirname(__DIR__) . '/ChatSocial.php';


/**
 * Mediator ChatSocial Test
 */
final class MediatorChatSocialTest extends TestCase
{
    public function test_login_Userが初めてのログインの場合は入室メッセージを表示()
    {
        $expected = "Tajimaさんが入室しました\n==============================\n";

        $user = new \Mediator\UserDefault('Tajima');
        $chat = new \Mediator\ChatSocial();
        $chat->login($user);

        $this->expectOutputString($expected);

        // ２度ログインしてもメッセージは変わらない(表示しない)
        $chat->login($user);
        $this->expectOutputString($expected);
    }
    public function test_sendMessage_メッセージを送信()
    {
        $expected = "Tajimaさんが入室しました\n==============================\n";
        $expected .= "Satoさんが入室しました\n==============================\n";
        $expected .= "Satoさん => Tajimaさん: 明日のご予定は？\n------------------------------\n";
        $expected .= "Kashimaさんは入室していないようです。\n------------------------------\n";

        $user_tajima = new \Mediator\UserDefault('Tajima');
        $user_sato = new \Mediator\UserDefault('Sato');
        $chat = new \Mediator\ChatSocial();
        $chat->login($user_tajima);
        $chat->login($user_sato);

        $user_sato->sendMessage('Tajima', '明日のご予定は？');
        $user_tajima->sendMessage('Kashima', '鹿島さんはいますか？');

        $this->expectOutputString($expected);
    }
}
