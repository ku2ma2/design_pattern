<?php

require_once "Aggregate.php";

class BookShelf implements Aggregate {
  public function iterator() {
    return true;
  }
}

