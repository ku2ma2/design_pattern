<?php

namespace Mediator;

require_once __DIR__ . '/Chatroom.php';

/**
 * ユーザー抽象クラス
 *
 * Mediatorパターンとして規定化する部分はこちらに実装している
 * メッセージ内容のみ具象クラス側に実装をお願いしている。
 *
 * @abstract
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class User
{
    protected $chatroom;
    protected $name;

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

    /**
     * チャットルーム設定
     *
     * @access public
     * @param Chatroom $chatromm 設定するチャットルームオブジェクト
     * @return void
     */
    public function setChatroom(Chatroom $chatroom)
    {
        $this->chatroom = $chatroom;
    }

    /**
     * チャットルーム取得
     *
     * 現在設定されているチャットルームを取得する
     *
     * @access public
     * @param void
     * @return void
     */
    public function getChatroom()
    {
        return $this->chatroom;
    }

    abstract public function sendMessage(string $to, string $message);
    abstract public function receiveMessage(string $from, string $message);
}
