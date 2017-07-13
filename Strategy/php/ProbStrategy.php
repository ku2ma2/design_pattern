<?php

require_once "Hand.php";
require_once "Strategy.php";

/**
 * 履歴を使ったじゃんけん戦略
 *
 * 対戦履歴からより勝ちに近いものが選びやすくなっている
 * 乱数で次の手を決める戦略
 *
 * @access public
 * @implements Strategy
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class ProbStrategy implements Strategy
{
    private $prevHandValue = 0;
    private $currentHandValue = 0;
    private $history = [];

    /**
     * コンストラクタ
     *
     * 対戦履歴を初期化している
     *
     * @access public
     * @param void
     * @return void
     */
    public function __construct()
    {
        $this->history = [
            0 => [0=>1, 1=>1, 2=>1],
            1 => [0=>1, 1=>1, 2=>1],
            2 => [0=>1, 1=>1, 2=>1]
        ];
    }

    /**
     * 次の手
     *
     * 前回までの対戦結果履歴と乱数で戦略を決める
     *
     * @access public
     * @param void
     * @return $this->prevHand
     */
    public function nextHand()
    {
        $bet = mt_rand(0, $this->getSum($this->currentHandValue));
        $handvalue = 0;

        if ($bet < $this->history[$this->currentHandValue][0]) {
            $handvalue = 0;
        } elseif ($bet <
        $this->history[$this->currentHandValue][0] + $this->history[$this->currentHandValue][1]) {
            $handvalue = 1;
        } else {
            $handvalue = 2;
        }
        $this->prevHandValue = $this->currentHandValue;
        $this->currentHandValue = $handvalue;

        return Hand::getHand($handvalue);
    }

    private function getSum(int $hv)
    {
        $sum = 0;
        for ($i=0; $i<3; $i++) {
            $sum += $this->history[$hv][$i];
        }
        return $sum;
    }

    /**
     * 学習
     *
     * 前回の手によって得られた情報から学習をする
     * ここでは履歴に勝った記録をつけている
     *
     * @access public
     * @param bool $win 勝負の結果
     * @return void
     */
    public function study(bool $win)
    {
        if ($win) {
            $this->history[$this->prevHandValue][$this->currentHandValue]++;
        } else {
            $this->history[$this->prevHandValue][($this->currentHandValue+1)%3]++;
            $this->history[$this->prevHandValue][($this->currentHandValue+2)%3]++;
        }
    }
}
