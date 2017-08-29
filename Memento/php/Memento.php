<?php

namespace Memento;

/**
 * Gamerの状態を表すクラス
 *
 * @access public
 * @extends \Mediator\Chatroom
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Memento
{
    public $money;
    private $fruits = [];

    public function __construct(int $money)
    {
        $this->money = $money;
    }
    public function getMoney()
    {
        return $this->money;
    }
    public function addFruit(string $fruit)
    {
        $this->fruits[] = $fruit;
    }
    public function getFruits()
    {
        return $this->fruits;
    }
}
