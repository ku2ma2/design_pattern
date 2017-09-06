<?php

namespace Flyweight;

/**
 * BigCharを集めて作った「大きな文字列」を表すクラス
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class BigString
{
    private $bigchars; // 大きな文字列の配列

    /**
     * コンストラクタ
     *
     * 文字列を受け取り大きな文字として出力
     *
     * @access public
     * @param void
     * @return void
     */
    public function __construct(string $string)
    {
        $this->bigchars = [];
        $factory = BigCharFactory::getInstance();
        $length = mb_strlen($string);
        for ($i=0; $i<$length; $i++) {
            $this->bigchars[$i] = $factory->getBigChar(substr($string, $i, 1));
        }
    }

    /**
     * 大きな文字配列を出力する
     *
     * @access public
     * @param void
     * @return void
     */
    public function print()
    {
        $length = count($this->bigchars);
        for ($i=0; $i<$length; $i++) {
            $this->bigchars[$i]->print();
        }
    }
}
