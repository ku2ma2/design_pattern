<?php

namespace Visitor;

require_once __DIR__."/Directory.php";
require_once __DIR__."/File.php";

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
    abstract public function __call(string $func, array $arg);
}
