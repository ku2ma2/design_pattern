<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/BookShelf.php';

/**
 *
 */
final class BookShelfTest extends TestCase
{
    public function testConstruct()
    {
        $bookShelf = new BookShelf(3);
        $this->assertEquals(is_object($bookShelf), true);
        
        return $bookShelf;
    }
    /**
     * @depends testConstruct
     */
    public function testGetLength(BookShelf $bookShelf)
    {
        $bookShelf->appendBook(new Book("book1"));
        $bookShelf->appendBook(new Book("book2"));
        $bookShelf->appendBook(new Book("book3"));

        $this->assertEquals($bookShelf->getLength(), 3);
        
        return $bookShelf;
    }
    /**
     * @depends testGetLength
     */
    public function testGetBookAt(BookShelf $bookShelf)
    {
        $result = $bookShelf->getBookAt(1);

        $this->assertEquals($result->getName(), "book2");
    }
}
