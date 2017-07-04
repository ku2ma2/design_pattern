<?php

require_once "DisplayImpl.php";

/**
 * 実装階層の抽象クラス
 *
 * 抽象階層(ここではDisplayやCountDisplay)側から移譲されている
 * 「実装階層」側を規定する抽象クラス
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Display
{
    private $impl;
    public function __construct(DisplayImpl $impl)
    {
        $this->impl = $impl;
    }
    public function open()
    {
        $this->impl->rawOpen();
    }

    public function print()
    {
        $this->impl->rawPrint();
    }

    public function close()
    {
        $this->impl->rawClose();
    }
    public function display()
    {
        $this->open();
        $this->print();
        $this->close();
    }
}
