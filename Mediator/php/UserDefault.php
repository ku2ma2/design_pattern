<?php

namespace Mediator;

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Chatroom.php';

/**
 * 発生したトラブルを表すクラス、トラブル番号(number)を持つ
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class UserDefault implements User
{
    private $chatroom;
    private $name;

    /**
     * コンストラクタ
     *
     * @access public
     * @param int $name ユーザー名
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * ユーザー名取得
     *
     * @access public
     * @param void
     * @return string $this->name ユーザー名
     */
    public function getName()
    {
        return $this->name;
    }

    public function setChatroom(Chatroom $chatroom)
    {
        $this->chatroom = $chatroom;
    }
    public function getChatroom()
    {
        return $this->chatroom;
    }
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
