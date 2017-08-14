<?php

namespace Mediator;

/**
 * 発生したトラブルを表すクラス、トラブル番号(number)を持つ
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class User
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

    /**
     * メッセージ受信
     *
     * @access public
     * @param string $from メッセージ送信者
     * @return string フォーマット化された文字列
     */
    public function receiveMessage(string $from, string $message)
    {
        printf("%sさん => %sさん: %s\n", $from, $this->getName(), $message);
    }
}
