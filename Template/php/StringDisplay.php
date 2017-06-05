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
    public function open()
    {
        $this->printLine();
    }
    public function print()
    {
        echo "|" . $this->string . "|\n";
    }
    public function close()
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
