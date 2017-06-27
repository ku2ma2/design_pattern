<?php

namespace factory;

/**
 * 項目(Item)抽象クラス
 *
 * LinkとTrayを同一視するための抽象クラス
 *
 * @access public
 * @abstract
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Item
{
    protected $caption;
    public function Item(string $caption)
    {
        $this->caption = $caption;
    }
    abstract public function makeHTML();
}
