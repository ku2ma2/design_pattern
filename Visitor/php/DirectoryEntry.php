<?php

namespace Visitor;

/**
 * Directory用Iterator
 *
 * whileなどで回せるようにIraratorにした
 *
 * @access public
 * @implements Iterator
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class DirectoryEntry implements \Iterator
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

    /**
     * エントリー追加
     *
     * @access public
     * @param mixed $entry 追加するエントリー
     * @return void
     */
    public function add(Entry $entry)
    {
        $this->entry[] = $entry;
    }

    /**
     * カーソルの初期化
     *
     * カーソル位置を0にして巻き戻す(rewind)
     *
     * @access public
     * @param void
     * @return void
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * カレントエントリーを取得
     *
     * @access public
     * @param void
     * @return mixed $this->entry[$this->posision];
     */
    public function current()
    {
        return $this->entry[$this->position];
    }

    /**
     * カーソル位置
     *
     * @access public
     * @param void
     * @return int $this->position
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * 次にエントリーを移動する
     *
     * カレントポジションは次に行く、返す値としては現在の位置
     *
     * @access public
     * @param void
     * @return mixed $this->current
     */
    public function next()
    {
        $result = $this->current();
        ++$this->position;
        return $result;
    }

    /**
     * エントリーの存在確認
     *
     * @access public
     * @param void
     * @return bool 存在しているかどうか
     */
    public function valid()
    {
        return isset($this->entry[$this->position]);
    }

    /**
     * 次のエントリーの存在確認
     *
     * @access public
     * @param void
     * @return bool 次のエントリーがあるかどうか
     */
    public function hasNext()
    {
        if ($this->position < count($this->entry)) {
            return true;
        } else {
            return false;
        }
    }
}
