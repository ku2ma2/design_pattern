<?php
namespace Decorator;

require_once "Border.php";
require_once "Display.php";

/**
 * 上下左右に飾り枠をつけるクラス
 *
 * @access public
 * @extends Border
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class FullBorder extends Border
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
    public function __construct(\Decorator\Display $display)
    {
        parent::__construct($display);
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
        return 1 + $this->display->getRows() + 1;
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
        if ($row === 0) {
            return "+" . $this->makeLine('-', $this->display->getColumns()) . "+";
        } elseif ($row === $this->display->getRows() + 1) {
            return "+" . $this->makeLine('-', $this->display->getColumns()) . "+";
        } else {
            return "|". $this->display->getRowText($row - 1) . "|";
        }
    }

    /**
     * 上下枠線の作成
     *
     * @access private
     * @param string $ch 枠線に使う文字
     * @param int $count 枠線の文字数
     * @return string $buf 最終的な枠線
     */
    private function makeLine(string $ch, int $count)
    {
        $buf = "";
        for ($i=0; $i<$count; $i++) {
            $buf .= $ch;
        }
        return $buf;
    }
}
