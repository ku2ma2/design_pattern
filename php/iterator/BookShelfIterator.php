<?php

require_once "Iterator.php";

class BookShelfIterator implements Iterator {
  public function hasNext() {
    return true;
  }
  public function next() {
    return true;
  }
}

