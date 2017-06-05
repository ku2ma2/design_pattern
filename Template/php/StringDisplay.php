<?php

require_once "AbstractDisplay.php";

class StringDisplay extends AbstractDisplay
{
    private $string;
    private $width;

    /**
     * コンストラクタ
     *
     * クラス変数に引数として与えられた文字列($string)を格納
     *
     * @access public
     * @param string $string 文字列
     * @return void
     */
    public function __construct($string)
    {
        $this->string = $string;
        $this->width = mb_strlen($string, 'UTF-8');
    }

    /**
     * 最初の処理
     *
     * 文字列を開いた際に最初に行われる処理ここではprintLineを呼び出している
     *
     * @access public
     * @param void
     * @return void
     * @see StringDisplay::printLine
     */
    public function open()
    {
        $this->printLine();
    }

    /**
     * 文字列の出力
     *
     * コンストラクタにて与えられた文字列を出力する
     *
     * @access public
     * @param void
     * @return void
     */
    public function print()
    {
        echo "|" . $this->string . "|\n";
    }

    /**
     * 最後の処理
     *
     * 文字列を閉じる際に最後に行われる処理ここではprintLineを呼び出している
     *
     * @access public
     * @param void
     * @return void
     * @see StringDisplay::printLine
     */
    public function close()
    {
        $this->printLine();
    }

    /**
     * 区切り文字の出力
     *
     * 文字列は行ごとに出力されるので最初と最後に区切り文字を出力する
     *
     * @access public
     * @param void
     * @return void
     */
    private function printLine()
    {
        echo "+";
        for ($i=0; $i<$this->width; $i++) {
            echo "-";
        }
        echo "+\n";
    }
}
