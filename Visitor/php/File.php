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
    public function __construct(string $name, int $size)
    {
        $this->name = $name;
        $this->size = $size;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function accept(\Visitor\ListVisitor $v)
    {
        $v->visit($this);
    }
}
