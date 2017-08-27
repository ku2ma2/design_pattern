<?php

namespace Memento;

/**
 * 交流チャットルームクラス
 *
 * @access public
 * @extends \Mediator\Chatroom
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Gamer
{
    private $money;
    private $fruits = [];
    private static $fruitsname = ['りんご','ぶどう','バナナ','みかん'];

    public function __construct(int $money)
    {
        $this->money = $money;
    }
    public function getMoney()
    {
        return $this->money;
    }
    public function __toString()
    {
        $result_fruits = implode(',', $this->fruits);
        return "[money = {$this->money}, fruits = {$result_fruits}]";
    }
    private function getFruit()
    {
        // (bool)mt_rand(0,1);
        return $this->fruits;
    }
}
