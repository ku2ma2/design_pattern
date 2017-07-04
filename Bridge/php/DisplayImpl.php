<?php

/**
 * 実装階層の抽象クラス
 *
 * 抽象階層(ここではDisplayやCountDisplay)側から移譲されている
 * 「実装階層」側を規定する抽象クラス
 *
 * @abstract
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class DisplayImpl
{
    abstract public function rawOpen();
    abstract public function rawPrint();
    abstract public function rawClose();
}
