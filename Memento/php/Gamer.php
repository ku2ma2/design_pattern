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

    public function bet()
    {
        $dice = mt_rand(1, 6);
        if ($dice == 1) {
            $this->money += 100;
            echo "所持金が増えました。\n";
        } elseif ($dice == 2) {
            $money /= 2;
            echo "所持金が半分になりました。\n";
        } elseif ($dice == 6) {
            $f = $this->getFruit();
            echo "フルーツ({$f})をもらいました。\n";
            $this->fruits->add($f);
        } else {
            echo "何も起こりませんでした。\n";
        }
    }

    public function __toString()
    {
        $result_fruits = implode(',', $this->fruits);
        return "[money = {$this->money}, fruits = {$result_fruits}]";
    }
    private function getFruit()
    {
        $prefix = '';
        if ((bool)mt_rand(0, 1)) {
            $prefix = 'おいしい';
        }
        $fruit_name = $this->fruitname[ mt_land(0, count($this->fruitname)) ];
        return $prefix . $fruit_name;
    }
}
