<?php

require_once "DisplayImpl.php";

/**
 * 文字列操作
 *
 * 「実装階層」における本来の実装を行うクラス
 * ここでは文字列を文字で囲む処理を実装している。
 *
 * @access public
 * @extends DisplayImpl
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class StringDisplayImpl extends DisplayImpl
{
    private $string;
    private $width;

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $string 文字列
     * @return void
     */
    public function __construct(string $string)
    {
        $this->string = $string;
        $this->width = mb_strlen($string);
    }

    /**
     * 文字列修飾開始
     *
     * ここでは上の線を引く
     *
     * @access public
     * @param void
     * @return void
     */
    public function rawOpen()
    {
        $this->printLine();
    }

    /**
     * 文字列出力
     *
     * 与えらえた文字列の最初と最後に修飾を入れる
     *
     * @access public
     * @param void
     * @return void
     */
    public function rawPrint()
    {
        echo "|{$this->string}|\n";
    }

    /**
     * 文字列修飾終了
     *
     * ここでは下の線を引く
     *
     * @access public
     * @param void
     * @return void
     */
    public function rawClose()
    {
        $this->printLine();
    }
    private function printLine()
    {
        echo "+";
        for ($i=0; $i<$this->width; $i++) {
            echo "-";
        }
        echo "+\n";
    }
}
