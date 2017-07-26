<?php

namespace Visitor;

require_once __DIR__ . "/ListVisitor.php";

/**
 * Visitorクラスのインスタンスを受け入れるデータ構造を表すインターフェース
 *
 * @access public
 * @abstract
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
interface Element
{
    public function accept(\Visitor\ListVisitor $v);
}
