<?php
namespace Decorator;

require_once "Border.php";
require_once "Display.php";

/**
 * 左右にのみ飾り枠をつけるクラス
 *
 * @access public
 * @extends Border
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class SideBorder extends Border
{
    private $borderChar;

    /**
     * コンストラクタ
     *
     * @access public
     * @param \Decorator\Display $display 文字列表示用の抽象オブジェクト
     * @param string $ch 飾り文字
     * @return void
     */
    public function __construct(\Decorator\Display $display, string $ch)
    {
        parent::__construct($display);
        $this->borderChar = $ch;
    }

    /**
     * 文字数取得
     *
     * @access public
     * @param void
     * @return int 文字列の両側に飾り文字をつけた数
     */
    public function getColumns()
    {
        return 1 + $this->display->getColumns() + 1;
    }

    /**
     * 行数取得
     *
     * @access public
     * @param void
     * @return int 行数
     */
    public function getRows()
    {
        return $this->display->getRows();
    }

    /**
     * 飾り文字付きの文字列
     *
     * @access public
     * @param int $row 行数指定
     * @return string $result 飾り文字付き文字列
     */
    public function getRowText(int $row)
    {
        $result = $this->borderChar;
        $result .= $this->display->getRowText($row);
        $result .= $this->borderChar;

        return $result;
    }
}
