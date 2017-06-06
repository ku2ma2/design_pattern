<?php

require_once "AbstractDisplay.php";

class CharDisplay extends AbstractDisplay
{
    private $ch;

    /**
     * コンストラクタ
     *
     * クラス変数に引数として与えられた文字($ch)を格納
     *
     * @access public
     * @param string $ch 文字
     * @return void
     */
    public function __construct($ch)
    {
        $this->ch = $ch;
    }

    /**
     * 最初の処理
     *
     * 文字を開いた際に最初に行われる処理ここでは文字列を出力している
     *
     * @access public
     * @param void
     * @return void
     */
    public function open()
    {
        echo "<<";
    }

    /**
     * 文字の出力
     *
     * コンストラクタにて与えられた文字を出力する
     *
     * @access public
     * @param void
     * @return void
     */
    public function print()
    {
        echo $this->ch;
    }

    /**
     * 最後の処理
     *
     * 文字を閉じる際に最後に行われる処理ここでは文字列を出力している
     *
     * @access public
     * @param void
     * @return void
     */
    public function close()
    {
        echo ">>\n";
    }
}
