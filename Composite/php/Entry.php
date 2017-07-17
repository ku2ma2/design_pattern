<?php

/**
 * FileとDirectoryを同一視する抽象クラス
 *
 * @access public
 * @abstract
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Entry
{
    abstract public function getName();
    abstract public function getSize();

    public function add(Entry $entry)
    {
        // 未実装
    }

    abstract protected function printList(string $prefix);

    public function toString()
    {
        return $this->getName() . " ({$this->getSize()})";
    }
}
