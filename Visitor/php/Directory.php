<?php

namespace Visitor;

require_once __DIR__ . "/Entry.php";
require_once __DIR__ . "/Visitor.php";

/**
 * ファイルを表すクラス
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

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function accept(\Visitor\Visitor $v)
    {
        $v->visit($this);
    }
}
