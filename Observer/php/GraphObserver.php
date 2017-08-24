<?php

namespace Observer;

require_once __DIR__ . '/NumberGenerator.php';

/**
 * 数字で数を表示するクラス
 *
 * @abstract
 * @access public
 * @implements SplObjserver
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 * @see http://php.net/manual/ja/class.splobserver.php
 */
class GraphObserver implements \SplObserver
{
    /**
     * 通知を受け取った処理
     *
     * Subject側から通知を受け取った後に行う処理。
     * ここでは設定された数字分「*」を表示している
     *
     * @access public
     * @param object $generator SplSubjectオブジェクト
     * @return void
     */
    public function update(\SplSubject $generator)
    {
        echo "GraphObserver: ";
        $count = $generator->getNumber();
        for ($i=0; $i< $count; $i++) {
            echo "*";
        }
        echo "\n";
    }
}
