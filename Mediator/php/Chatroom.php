<?php

namespace Mediator;

require_once __DIR__ . '/User.php';

/**
 * チャットルーム抽象クラス
 *
 * @interface
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
interface Chatroom
{
    public function login(User $user);
    public function sendMessage(string $from, string $to, string $mssage);
}
