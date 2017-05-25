<?php

require_once "IteratorInterface.php";
require_once "BookShelf.php";

class BookShelfIterator implements IteratorInterface
{
    private $bookShelf;
    private $index;

    /**
     * コンストラクタ
     *
     * Bookshelf(本棚)を引数にとって、イテレーターオブジェクトを作成する
     *
     * @access public
     * @param BookShelf
     * @return void
     * @see BookShelf::iterator
     */
    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    /**
     * 次の本があるかチェック
     *
     * 今指定されているカーソル(index)からBookshelf(本棚)オブジェクトの
     * 次があるかをチェック
     *
     * @access public
     * @param void
     * @return Boolean
     */
    public function hasNext()
    {
        if ($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }
    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}
