<?php

namespace Decorator;

require_once "Display.php";

/**
 * 「飾り枠」を表す抽象クラス
 *
 * @access public
 * @abstract
 * @extends Display
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Border extends \Decorator\Display
{
    protected $display;

    /**
     * コンストラクタ
     *
     * @access public
     * @param Display $display 飾り枠インスタンス
     * @return void
     */
    public function __construct($display)
    {
        $this->display = $display;
    }
}
