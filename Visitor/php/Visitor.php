<?php

namespace Visitor;

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
abstract class Visitor
{
    abstract public function visit($entry);
}
