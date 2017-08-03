<?php

namespace ChainOfResponsibility;

/**
 * 発生したトラブルを表すクラス、トラブル番号(number)を持つ
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Trouble
{
    private $number;

    /**
     * コンストラクタ
     *
     * @access public
     * @param int $number トラブル番号
     * @return void
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * トラブル番号取得
     *
     * @access public
     * @param void
     * @return int $this->number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * クラスの文字列表現
     *
     * フォーマット化されたトラブル番号を返す
     *
     * @access public
     * @param void
     * @return string フォーマット化されたトラブル番号
     */
    public function __toString()
    {
        return "[Trouble {$this->number}]";
    }
}
