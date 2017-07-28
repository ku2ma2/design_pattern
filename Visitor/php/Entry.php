<?php

namespace Visitor;

require_once __DIR__ . "/Element.php";

/**
 * ファイルやディレクトリを訪れる訪問者を表す抽象クラス
 *
 * @access public
 * @abstract
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Entry implements \Visitor\Element
{
    abstract public function getName();
    abstract public function getSize();
    public function add(\Visitor\Entry $entry)
    {
        // 未実装
    }

    /**
     * 文字列としてインスタンスを返す
     *
     * @access public
     * @param void
     * @return string
     * @see http://php.net/manual/ja/language.oop5.magic.php#object.tostring
     */
    public function __toString()
    {
        return $this->getName() ." (".$this->getSize().")";
    }
}
