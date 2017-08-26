<?php

namespace Mediator;

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Chatroom.php';

/**
 * 通常ユーザー
 *
 * @access public
 * @extends \Mediator\User
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class UserDefault extends User
{

    /**
     * メッセージ送信
     *
     * @access public
     * @param string $to 受信者名
     * @param string $message メッセージ
     * @return void
     */
    public function sendMessage(string $to, string $message)
    {
        $this->chatroom->sendMessage($this->name, $to, $message);
    }
    
    /**
     * メッセージ受信
     *
     * @access public
     * @param string $from メッセージ送信者
     * @return string フォーマット化された文字列
     */
    public function receiveMessage(string $from, string $message)
    {
        printf("%sさん => %sさん: %s\n------------------------------\n", $from, $this->getName(), $message);
    }
}
