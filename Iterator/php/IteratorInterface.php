<?php

/**
 * Interatorのインターフェース
 *
 * PHP は「Interface」は予約語なのでInteratorInterfaceという名前にした。
 */
interface IteratorInterface
{
    public function hasNext(); // 集合体に次の要素が存在するかどうかをチェック
    public function next(); // 集合体の次の要素を返す
}
