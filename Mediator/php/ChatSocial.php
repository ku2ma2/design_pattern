<?php

namespace Mediator;

require_once __DIR__ . '/Chatroom.php';

/**
 * 発生したトラブルを表すクラス、トラブル番号(number)を持つ
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class ChatSocial implements Chatroom
{
    private $users = [];

    public function login(User $user)
    {
        $user->setChatroom($this);
        $name = $user->getName();

        if (!array_key_exists($name, $this->users)) {
            $this->users[$name] = $user;
            printf("%sさんが入室しました\n==============================\n", $name);
        }
    }
    public function sendMessage(string $from, string $to, string $mssage)
    {
        ;
    }
}
