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
     * SplFileObjectを受け取ってクラス変数 $fontdata に格納
     *
     * @access public
     * @param void
     * @return bool
     * @see http://php.net/manual/ja/class.splfileobject.php
     */
    public function __construct(string $charname)
    {
        $this->charname = $charname;
        $file = __DIR__."/big{$charname}.txt"; // ファイル名作成

        // ファイルが存在しない場合は例外を投げる
        if (!is_file($file)) {
            throw new \RuntimeException('ファイルが見つかりません: ' . $file);
            return false;
        }

        // SplFileObjectでファイル操作する
        $f = new \SplFileObject($file);
        $this->fontdata = '';
        foreach ($f as $line_num => $line) {
            $this->fontdata .= $line;
        }
        return true;
    }

    /**
     * 大きな文字データを出力する
     *
     * @access public
     * @param void
     * @return void
     */
    public function print()
    {
        echo $this->fontdata . "\n";
    }
}
