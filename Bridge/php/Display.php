<?php

require_once "DisplayImpl.php";

/**
 * 機能階層の抽象クラス
 *
 * 抽象階層で実装側に処理を移譲している
 * 「機能階層」側を規定する抽象クラス
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Display
{
    private $impl;

    /**
     * コンストラクタ
     *
     * @access public
     * @param DisplayImpl $impl 実装オブジェクト
     * @return void
     */
    public function __construct(DisplayImpl $impl)
    {
        $this->impl = $impl;
    }

    /**
     * 初期処理(実装側に移譲)
     *
     * @access public
     * @param void
     * @return void
     * @todo TODO
     */
    public function open()
    {
        $this->impl->rawOpen();
    }

    /**
     * 文字列処理(実装側に移譲)
     *
     * @access public
     * @param void
     * @return void
     * @todo TODO
     */
    public function print()
    {
        $this->impl->rawPrint();
    }

    /**
     * 終端処理(実装側に移譲)
     *
     * @access public
     * @param void
     * @return void
     * @todo TODO
     */
    public function close()
    {
        $this->impl->rawClose();
    }

    /**
     * 総合表示処理
     *
     * やりたい処理を本クラス内の関数を使ってまとめたもの。
     *
     * @access public
     * @param void
     * @return void
     * @todo TODO
     */
    public function display()
    {
        $this->open();
        $this->print();
        $this->close();
    }
}
