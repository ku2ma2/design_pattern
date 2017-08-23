<?php

namespace Observer;

require_once __DIR__ . '/NumberGenerator.php';

/**
 * ランダムに数を生成するクラス
 *
 * @access public
 * @extends NumberGenerator
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 * @see http://php.net/manual/ja/class.splobserver.php
 */
class RandomNumberGenerator extends NumberGenerator
{
    private $number;

    public function getNumber()
    {
        return $this->number;
    }
    public function execute()
    {
        for ($i=0; $i<20; $i++) {
            $this->number = mt_rand(0, 50);
            $this->notify();
        }
    }
}
