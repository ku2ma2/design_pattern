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

    /**
     * ログイン
     *
     * @access public
     * @param User $user ユーザーオブジェクト
     * @return void
     */
    public function login(User $user)
    {
        $user->setChatroom($this);
        $name = $user->getName();

        if (!array_key_exists($name, $this->users)) {
            $this->users[$name] = $user;
            printf("%sさんが入室しました\n==============================\n", $name);
        }
    }

    /**
     * メッセージ送信
     *
     * @access public
     * @param string $from 送信者名
     * @param string $to 受信者名
     * @param string $message メッセージ本体
     * @return void
     */
    public function sendMessage(string $from, string $to, string $message)
    {
        if (array_key_exists($to, $this->users)) {
            $this->users[$to]->receiveMessage($from, $message);
        } else {
            printf("%sさんは入室していないようです。\n------------------------------\n", $to);
        }
    }
}
