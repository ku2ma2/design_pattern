<?php

require_once "DisplayImpl.php";

/**
 * -
 *
 * -
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
     * -
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

    public function rawOpen()
    {
        $this->printLine();
    }
    public function rawPrint()
    {
        echo "|{$this->string}|\n";
    }

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
