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
    public function __construct(\Decorator\Display $display, string $ch)
    {
        parent::__construct($display);
        $this->borderChar = $ch;
    }
    public function getColumns()
    {
        return 1 + $this->display->getColumns() + 1;
    }
    public function getRows()
    {
        return $this->display->getRows();
    }
    public function getRowText(int $row)
    {
        $result = $this->borderChar;
        $result .= $this->display->getRowText($row);
        $result .= $this->borderChar;

        return $result;
    }
}
