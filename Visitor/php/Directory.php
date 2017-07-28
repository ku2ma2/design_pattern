<?php

namespace Visitor;

require_once __DIR__ . "/Entry.php";
require_once __DIR__ . "/ListVisitor.php";
require_once __DIR__ . "/DirectoryEntry.php";

/**
 * ファイルを表すクラス
 *
 * addやacceptでは本来ListVisitorを抽象化したVisitorを
 * 使ってタイプヒンティングする必要があるが、PHPのオーバーローディング
 * の問題があるのでListVistorを使っている。
 *
 * @access public
 * @extends \Visitor\Entry
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Directory extends \Visitor\Entry
{
    private $name;
    private $dir;

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
        $this->dir = new \Visitor\DirectoryEntry();
    }

    /**
     * ディレクトリ名取得
     *
     * @access public
     * @param void
     * @return string $this->name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * ディレクトリサイズ取得
     *
     * @access public
     * @param void
     * @return int $size
     */
    public function getSize()
    {
        $size = 0;
        $this->dir->rewind();

        while ($this->dir->hasNext()) {
            $entry = $this->dir->next();
            $size += $entry->getSize(); // 再帰的にサイズを計算する
        }
        return $size;
    }

    /**
     * 内部に保存されているイテレーター取得
     *
     * @access public
     * @param void
     * @return object $this->dir
     */
    public function iterator()
    {
        return $this->dir;
    }
    /**
     * ディレクトリ追加
     *
     * @access public
     * @param Entry $entry 追加するディレクトリ
     * @return Dir 自分自身
     */
    public function add(\Visitor\Entry $entry)
    {
        $this->dir->add($entry);
        return $this;
    }
    /**
     * Visitor受け入れ関数
     *
     * ここでVisitorを受け入れてVisitor側の処理に移譲している。
     *
     * @access public
     * @param \Visitor\ListVisitor $v
     * @return void
     */
    public function accept(\Visitor\ListVisitor $v)
    {
        $v->visit($this);
    }
}
