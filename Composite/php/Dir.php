<?php

require_once "Entry.php";
require_once "DirEntry.php";

/**
 * Directoryを表すクラス
 *
 * Directoryは元々PHPのクラスとして予約されているようなのでDirとした。
 * - http://php.net/manual/ja/reserved.classes.php
 *
 * また公式に用意されているIteratorのインターフェースを使って
 * 「DirEntry」を用意した。
 * - http://php.net/manual/ja/class.iterator.php
 *
 * @access public
 * @extends Entry
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 * @see DirEntry
 */
class Dir extends Entry
{
    private $name;
    private $directory;

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $name ディレクトリ名
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->directory = new DirEntry();
    }

    /**
     * ディレクトリ名取得
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
     * フォルダ以下をファイル・フォルダ問わずサイズを合計する
     *
     * @access public
     * @param void
     * @return int $size ファイル・ディレクトリのサイズ合計
     * @see DirEntry
     */
    public function getSize()
    {
        $size = 0;
        
        while ($this->directory->hasNext()) {
            $entry = $this->directory->next();
            $size += $entry->getSize();
        }
        return $size;
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
