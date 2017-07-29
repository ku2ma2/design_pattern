<?php

namespace Visitor;

require_once __DIR__ . "/Entry.php";
require_once __DIR__ . "/ListVisitor.php";

/**
 * ファイルを表すクラス
 *
 * @access public
 * @extends \Visitor\Entry
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class File extends \Visitor\Entry
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
     * @return string $this->name
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
     * @return int $this->size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Visitorを受け入れるメソッド
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
