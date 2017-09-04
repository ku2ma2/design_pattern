<?php

namespace State;

/**
 * カウンタの状況を抽象化するためのインターフェース
 *
 * @interface
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
interface Context
{
    public function switchState();
    public function isAuthenticated();
    public function getMenu();
    public function getUserName();
    public function getCount();
    public function incrementCount();
    public function resetCount();
}
