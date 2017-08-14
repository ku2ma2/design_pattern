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
interface User
{
    public function getName();
    public function setChatroom(Chatroom $chatroom);
    public function getChatroom();
    public function sendMessage(string $to, string $message);
    public function receiveMessage(string $from, string $message);
}
