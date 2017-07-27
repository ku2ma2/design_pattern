<?php

namespace Visitor;

/**
 * Visitorクラスのインスタンスを受け入れるデータ構造を表すインターフェース
 *
 * @access public
 * @abstract
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Visitor
{
    abstract public function visit($entry);
}
