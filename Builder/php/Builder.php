<?php

/**
 * 文章構築
 *
 * 各種フォーマットで文章を構築するための抽象クラス
 *
 * @access public
 * @abstract
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Builder
{
    abstract public function makeTitle(string $title);
    abstract public function makeString(string $str);
    abstract public function makeItems(array $items);
    abstract public function close();
}
