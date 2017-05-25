<?php

require_once "IteratorInterface.php";
require_once "BookShelf.php";

class BookShelfIterator implements IteratorInterface
{
    private $bookShelf;
    private $index;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }
  
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
