<?php

namespace Flyweight;

/**
 * 「大きな文字」を表すクラス
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class BigChar
{
    private $charname; // 文字の名前
    private $fontdata; // 大きな文字列表現

    /**
     * コンストラクタ
     *
     * SplFileObjectを受け取ってクラス変数に
     *
     * @access public
     * @param void
     * @return void
     * @see http://php.net/manual/ja/class.splfileobject.php
     */
    public function __construct(string $charname)
    {
        $this->charname = $charname;

        try {
            $file = __DIR__."/big{$charname}.txt";
            $f = new \SplFileObject($file);
            foreach ($f as $line_num => $line) {
                echo "Line $line_num is $line";
            }
        } catch (Exception $e) {
            $this->fontdata = $charname . "?";
            return $e->message();
        }
    }
    public function print()
    {
        echo 'add';
    }
}
