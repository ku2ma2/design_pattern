<?php

namespace Memento;

/**
 * ゲームを行う主人公のクラス、Mementoのインスタンスを作る
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
     * 現在の所持金取得
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
     * サイコロイベント
     *
     * サイコロを振り、その数によって所持金やフルーツが変化する
     * イベントが起きる
     *
     * @access public
     * @param void
     * @return void
     */
    public function bet()
    {
        $dice = mt_rand(1, 6);
        if ($dice == 1) {
            $this->money += 100;
            echo "所持金が増えました。\n";
        } elseif ($dice == 2) {
            $this->money = (int)($this->money / 2);
            echo "所持金が半分になりました。\n";
        } elseif ($dice == 6) {
            $f = $this->getFruit();
            echo "フルーツ({$f})をもらいました。\n";
            $this->fruits[] = $f;
        } else {
            echo "何も起こりませんでした。\n";
        }
    }

    /**
     * Memento作成
     *
     * @access public
     * @param void
     * @return void
     */
    public function createMemento()
    {
        $m = new \Memento\Memento($this->money);

        foreach ($this->fruits as $f) {
            if ((strpos($f, 'おいしい') === 0)) {
                $m->addFruit($f);
            }
        }

        return $m;
    }

    /**
     * 以前の状態に復帰させる
     *
     * @access public
     * @param Memento $memento 記憶オブジェクト
     * @return void
     */
    public function restoreMemento(Memento $memento)
    {
        $this->money = $memento->money;
        $this->fruits = $memento->getFruits();
    }

    /**
     * 現在の状況を返す
     *
     * @access public
     * @param void
     * @return void
     */
    public function __toString()
    {
        $result_fruits = implode(',', $this->fruits);
        return "[money = {$this->money}, fruits = {$result_fruits}]";
    }

    /**
     * フルーツを取得する
     *
     * 乱数によってフルーツが決められる。また、一定の確率でおいしいフルーツを
     * 取得できる
     *
     * @access public
     * @param void
     * @return void
     */
    private function getFruit()
    {
        $prefix = '';
        if ((bool)mt_rand(0, 1)) {
            $prefix = 'おいしい';
        }
        $fruit_id = mt_rand(0, count(self::$fruitsname) - 1);
        $fruit_name = self::$fruitsname[$fruit_id];
        return $prefix . $fruit_name;
    }
}
