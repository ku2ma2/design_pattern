<?php

namespace Visitor;

require_once __DIR__ . "/Element.php";

/**
 * ファイルやディレクトリを訪れる訪問者を表す抽象クラス
 *
 * PHPではオーバーロードはサポートされていないので
 * ここはひとつの関数で対応することにする。
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
    public function iterator()
    {
        // 未実装
    }
    public function toString()
    {
        return getName() ." (".getSize().")";
    }
}
