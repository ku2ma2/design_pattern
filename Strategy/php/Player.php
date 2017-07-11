<?php

require_once "Strategy.php";

/**
 * じゃんけんのプレイヤー
 *
 * 実際にじゃんけんを行うプレイヤーを表している。
 * 戦略(Strategy)を与えられて処理自体はそちらに移譲している。
 *
 * @access public
 * @implements Strategy
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 * @see Strategy::__construct
 */
class Player
{
    private $name = '';
    private $strategy;
    private $wincount = 0;
    private $losecount = 0;
    private $gamecount = 0;

    /**
     * コンストラクタ
     *
     * @access public
     * @param int $seed 変数シード
     * @return void
     */
    public function __construct(string $name, Strategy $strategy)
    {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    /**
     * 次の手
     *
     * @access public
     * @param void
     * @return object 移譲された次の手を決める関数
     */
    public function nextHand()
    {
        return $this->strategy->nextHand();
    }

    /**
     * 勝った処理
     *
     * @access public
     * @param void
     * @return void
     */
    public function win()
    {
        $this->strategy->study(true);
        $this->wincount++; // 勝利数を増やす
        $this->gamecount++;
    }

    /**
     * 負けた処理
     *
     * @access public
     * @param void
     * @return void
     */
    public function lose()
    {
        $this->strategy->study(false);
        $this->losecount++; // 敗戦数を増やす
        $this->gamecount++;
    }

    /**
     * 引き分け処理
     *
     * @access public
     * @param void
     * @return void
     */
    public function even()
    {
        $this->gamecount++;
    }

    /**
     * 文字列変換
     *
     * 現状の対戦結果を文字列で返す
     *
     * @access public
     * @param void
     * @return string 対戦結果
     */
    public function toString()
    {
        return "[{$this->name}:{$this->gamecount} games, {$this->wincount} win, {$this->losecount} lose]";
    }
}
