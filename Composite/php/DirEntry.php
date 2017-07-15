<?php

require_once "Entry.php";

/**
 * Directoryを表すクラス
 *
 * Directoryは元々PHPのクラスとして予約されているようなので
 * Dirとした。
 * - http://php.net/manual/ja/reserved.classes.php
 *
 * @access public
 * @extends Entry
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class DirEntry implements Iterator
{
    private $position;
    private $entry = [];

    /**
     * コンストラクタ
     *
     * @access public
     * @param void
     * @return void
     */
    public function __construct()
    {
        $this->position = 0;
    }

    public function rewind()
    {
        $this->position = 0;
    }
    public function current()
    {
        return $this->entry[$this->position];
    }
    public function key()
    {
        return $this->position;
    }
    public function next()
    {
        $result = $this->current();
        ++$this->position;
        return $result;
    }
    public function valid()
    {
        return isset($this->entry[$this->position]);
    }
    public function hasNext()
    {
        if ($this->position < count($this->entry)) {
            return true;
        } else {
            return false;
        }
    }
}
