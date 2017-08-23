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
class DigitObserver implements \SplObserver
{
    public function update(\SplSubject $generator)
    {
        echo "DigitObserver: {$generator->getNumber()}\n";
    }
}
