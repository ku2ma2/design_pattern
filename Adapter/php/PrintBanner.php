<?php

require_once "Banner.php";
require_once "PrintInterface.php";

/**
 * バナー表示
 *
 * 与えられた文字列を「強め」「弱め」という表現を施して出力する
 *
 * @access public
 * @implements PrintInterface
 * @extends Banner
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class PrintBanner extends Banner implements PrintInterface
{
    private $string;

    /**
     * コンストラクタ
     *
     * 引数をプライベートなクラス変数に入れる
     * 親クラス(Banner)に渡す
     *
     * @access public
     * @param string $string 文字列
     * @return void
     * @see Banner::__construct
     */
    public function __construct($string)
    {
        parent::__construct($string);
    }

    /**
     * 弱め表現
     *
     * 設定された文字列を弱めに表現する。
     * 何を持って「弱め」なのかを実装する
     *
     * @access public
     * @param void
     * @return void
     * @see Banner::showWithParen
     */
    public function printWeak()
    {
        echo $this->showWithParen() ."\n";
    }

    /**
     * 強め表現
     *
     * 設定された文字列を弱めに表現する。
     * 何を持って「強め」なのかを実装する
     *
     * @access public
     * @param void
     * @return void
     * @see Banner::showWithAster
     */
    public function printStrong()
    {
        echo $this->showWithAster() ."\n";
    }
}
