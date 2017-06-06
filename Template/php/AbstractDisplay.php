<?php

/**
 * ディスプレイのテンプレート
 *
 * 拡張されたサブクラスに指定されたメソッドの実装を強制する
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class AbstractDisplay
{
    abstract public function open();
    abstract public function print();
    abstract public function close();

    public function display()
    {
        $this->open();
        for ($i=0; $i<5; $i++) {
            $this->print();
        }
        $this->close();
    }
}
