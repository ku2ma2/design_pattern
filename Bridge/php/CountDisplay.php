<?php

require_once "Display.php";
require_once "DisplayImpl.php";

/**
 * 機能抽象クラスの拡張
 *
 * 機能階層の抽象クラス(ここではDisplay)を拡張して複数行に対応している。
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class CountDisplay extends Display
{
    private $impl;

    /**
     * コンストラクタ
     *
     * @access public
     * @param DisplayImpl $impl 表示処理オブジェクト
     * @return void
     * @see Display::__construct
     */
    public function __construct(DisplayImpl $impl)
    {
        parent::__construct($impl);
    }

    /**
     * 複数行表示
     *
     * 与えられた数値分の行数表示する
     *
     * @access public
     * @param int $times 繰り返す数
     * @return void
     */
    public function multiDisplay(int $times)
    {
        $this->open();
        for ($i=0; $i<$times; $i++) {
            $this->print();
        }
        $this->close();
    }
}
