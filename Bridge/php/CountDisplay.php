<?php

require_once "Display.php";
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
class CountDisplay extends Display
{
    private $impl;
    public function __construct(DisplayImpl $impl)
    {
        parent::__construct($impl);
    }

    public function multiDisplay(int $times)
    {
        $this->open();
        for ($i=0; $i<$times; $i++) {
            $this->print();
        }
        $this->close();
    }
}
