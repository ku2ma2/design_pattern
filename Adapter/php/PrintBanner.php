<?php

require_once "Banner.php";
require_once "PrintInterface.php";

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

    public function printWeak()
    {
        echo $this->showWithParen() ."\n";
    }

    public function printStrong()
    {
        echo $this->showWithAster() ."\n";
    }
}
