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

    /**
     * コンストラクタ
     *
     * @access public
     * @param int $money 所持金
     * @return void
     */
    public function __construct(int $money)
    {
        $this->money = $money;
    }

    /**
     * 現在の所持金を取得
     *
     * @access public
     * @param void
     * @return void
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * フルーツを追加
     *
     * @access public
     * @param string $fruit フルーツ名
     * @return void
     */
    public function addFruit(string $fruit)
    {
        $this->fruits[] = $fruit;
    }

    /**
     * フルーツリストを取得
     *
     * @access public
     * @param void
     * @return void
     */
    public function getFruits()
    {
        return $this->fruits;
    }
}
