<?php

/**
 * Printのインターフェース
 *
 * PHP は「Print」は予約語なのでPrintInterfaceという名前にした。
 */
interface PrintInterface
{
    public function printWeak(); // 表現を弱める
    public function printStrong(); // 表現を強める
}
