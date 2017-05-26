<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/BookShelfIterator.php';

/**
 * BookShelf Test
 */
final class BookShelfIteratorTest extends TestCase
{
    public function testConstruct()
    {
        // 今回は３冊の本棚を作成する
        $bookShelf = new BookShelf();
        $bookShelf->appendBook(new Book("book1"));
        $bookShelf->appendBook(new Book("book2"));
        $bookShelf->appendBook(new Book("book3"));

        $it = $bookShelf->iterator();
        $this->assertEquals(is_object($it), true);

        return $it;
    }
    /**
     * @depends testConstruct
     */
    public function testNext($it)
    {
        $book = $it->next();
        $this->assertEquals(is_object($book), true);
        $this->assertEquals($book->getName(), 'book1');

        $book = $it->next();
        $this->assertEquals(is_object($book), true);
        $this->assertEquals($book->getName(), 'book2');

        return $it;
    }
    /**
     * @depends testNext
     */
    public function testHasNext($it)
    {
        $this->assertEquals($it->hasNext(), true);
        $book = $it->next();
        // 最終的にはFalseになる
        $this->assertEquals($it->hasNext(), false);
    }
}
