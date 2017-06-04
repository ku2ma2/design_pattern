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
    public function open()
    {
        echo "<<";
    }
    public function print()
    {
        echo $this->ch;
    }
    public function close()
    {
        echo ">>\n";
    }
}
