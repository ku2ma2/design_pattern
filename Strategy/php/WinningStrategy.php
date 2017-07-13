<?php

require_once "Hand.php";
require_once "Strategy.php";

/**
 * 乱数でのじゃんけん戦略
 *
 * 単純に乱数で次の手を決める戦略
 *
 * @access public
 * @implements Strategy
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class WinningStrategy implements Strategy
{
    private $won = false;
    private $prevHand;

    /**
     * コンストラクタ
     *
     * mt_seedで乱数シードを与えている。
     * またHandオブジェクトを初期化。
     *
     * @access public
     * @param void
     * @return void
     */
    public function __construct()
    {
        $this->prevHand = Hand::getHand(0); // 前回の手役を初期化
    }

    /**
     * 次の手
     *
     * 全開の勝負に勝ったならば次も同じ手、負けたなら乱数で決める戦略
     * 乱数はmt_randを使っている。
     *
     * @access public
     * @param void
     * @return $this->prevHand
     */
    public function nextHand()
    {
        if (!$this->won) {
            $this->prevHand = Hand::getHand(mt_rand(0, 2));
        }
        return $this->prevHand;
    }

    /**
     * 学習
     *
     * 前回の手によって得られた情報から学習をする
     * ここでは前回と同じであれば、今回も同じ手を使うという学習をする。
     *
     * @access public
     * @param bool $win 勝負の結果
     * @return void
     */
    public function study(bool $win)
    {
        $this->won = $win;
    }
}
