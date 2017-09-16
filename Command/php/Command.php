<?php

namespace Command;

/**
 * Commandクラスに相当
 *
 * このインターフェースを使って使うコマンドを抽象化する。
 *
 * @interaface
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 * @todo TODO
 */
interface Command
{
    public function execute();
}
