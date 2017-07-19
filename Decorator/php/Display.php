<?php

namespace Decorator;

/**
 * 文字列表示用の抽象クラス
 *
 * @access public
 * @abstract
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Display
{
    abstract public function getColumns();
    abstract public function getRows();
    abstract public function getRowText(int $row);

    /**
     * 全て表示する
     *
     * @access public
     * @param void
     * @return void
     */
    final public function show()
    {
        for ($i=0; $i<$this->getRows(); $i++) {
            echo $this->getRowText($i) . "\n";
        }
    }
}
