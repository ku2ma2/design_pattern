<?php

namespace State;

/**
 * 金庫の状態を表すインターフェース
 *
 * @interface
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
interface UserState
{
    public function isAuthenticated();
    public function nextState();
    public function getMenu();
}
