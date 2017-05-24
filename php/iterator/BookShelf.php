<?php

require_once "Aggregate.php";
require_once "Book.php";
require_once "BookShelfIterator.php";

class BookShelf implements Aggregate {
  
  private $books;
  private $last = 0;

  public function __construct( $maxsize ) {
    $this->books = new SplFixedArray( $maxsize );
  }

  public function getBookAt( $index ) {
    return $this->books[$index];
  }

  public function appendBook( $book ) {
    $this->books[$this->last] = $book;
    $this->last++;
  }

  public function getLength() {
    return $this->last;
  }

  public function iterator() {
    $bookshelf_iterator = new BookShelfIterator( $this );
    return $bookshelf_iterator;
  }
}

