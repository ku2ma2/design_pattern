<?php

namespace State;

/**
 * 金庫の状態変化を管理し、警備センターとの連絡を取るインターフェース
 *
 * @interface
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
interface Context
{
    public function setClock(int $hour);
    public function changeState(State $state);
    public function callSecurityCenter(string $msg);
    public function recordLog(string $msg);
}
