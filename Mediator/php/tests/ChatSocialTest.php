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
}
