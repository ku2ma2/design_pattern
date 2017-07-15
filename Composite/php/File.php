<?php

require_once "Entry.php";

/**
 * Fileを表すクラス
 *
 * @access public
 * @extends Entry
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class File extends Entry
{
    private $name;
    private $size;

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $name ファイル名
     * @param int $size ファイルサイズ
     * @return void
     */
    public function __construct(string $name, int $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    /**
     * ファイル名取得
     *
     * @access public
     * @param void
     * @return void
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * ファイルサイズ取得
     *
     * @access public
     * @param void
     * @return void
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * リスト形式出力
     *
     * 与えられたパスとファイル名を出力する
     *
     * @access protected
     * @param string $prefix ファイルパス(prefix)
     * @return void
     */
    protected function printList(string $prefix)
    {
        echo "{$prefix}/{$this->toString()}\n";
    }
}
