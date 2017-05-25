<?php

require_once "BookShelf.php";

$bookShelf = new BookShelf(5);
$bookShelf->appendBook(new Book("book1"));
$bookShelf->appendBook(new Book("book2"));
$bookShelf->appendBook(new Book("book3"));
$bookShelf->appendBook(new Book("book4"));
$bookShelf->appendBook(new Book("book5"));
$it = $bookShelf->iterator();

while ($it->hasNext()) {
    $book = $it->next();
    echo $book->getName()."\n";
}
