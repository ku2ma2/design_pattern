<?php

namespace Decorator;

require_once "Display.php";

/**
 * 1行だけからなる文字列表示用のクラス
 *
 * @access public
 * @extends Display
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class StringDisplay extends \Decorator\Display
{
    private $string;

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $string 表示文字列を指定
     * @return void
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * 文字数取得
     *
     * @access public
     * @param void
     * @return int 文字数(mb_strlenを使っている)
     */
    public function getColumns()
    {
        return mb_strlen($this->string);
    }

    /**
     * 行数取得
     *
     * @access public
     * @param void
     * @return int 固定で1
     */
    public function getRows()
    {
        return 1; // 行数は1
    }

    /**
     * 該当行の文字列取得
     *
     * @access public
     * @param int $row 行数
     * @return string $this->string 文字列
     */
    public function getRowText(int $row)
    {
        if ($row === 0) {
            return $this->string;
        } else {
            return null;
        }
    }
}
