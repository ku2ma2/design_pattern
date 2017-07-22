<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/BookShelf.php';

/**
 * Iterator BookShelf Test
 */
final class IteratorBookShelfTest extends TestCase
{
    public function testConstruct()
    {
        $expected = true;
        $bookShelf = new BookShelf();
        $this->assertEquals($expected, is_object($bookShelf));

        return $bookShelf;
    }
    /**
     * @depends testConstruct
     */
    public function testGetLength(BookShelf $bookShelf)
    {
        $expected = 3;

        $bookShelf->appendBook(new Book("book1"));
        $bookShelf->appendBook(new Book("book2"));
        $bookShelf->appendBook(new Book("book3"));

        $this->assertEquals($expected, $bookShelf->getLength());
        
        return $bookShelf;
    }
    /**
     * @depends testGetLength
     */
    public function testGetBookAt(BookShelf $bookShelf)
    {
        $expected = "book2";
        $result = $bookShelf->getBookAt(1);

        $this->assertEquals($expected, $result->getName());
    }
}
