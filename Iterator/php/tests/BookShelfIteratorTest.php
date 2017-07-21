<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/BookShelfIterator.php';

/**
 * Iterator BookShelf Test
 */
final class IteratorBookShelfIteratorTest extends TestCase
{
    public function testConstruct()
    {
        $expected = true;

        // 今回は３冊の本棚を作成する
        $bookShelf = new BookShelf();
        $bookShelf->appendBook(new Book("book1"));
        $bookShelf->appendBook(new Book("book2"));
        $bookShelf->appendBook(new Book("book3"));

        $it = $bookShelf->iterator();
        $this->assertEquals($expected, is_object($it));

        return $it;
    }
    /**
     * @depends testConstruct
     */
    public function testNext($it)
    {
        $expected = "book1";
        $book = $it->next();
        $this->assertEquals(is_object($book), true);
        $this->assertEquals($expected, $book->getName());

        $expected = "book2";
        $book = $it->next();
        $this->assertEquals(is_object($book), true);
        $this->assertEquals($expected, $book->getName());

        return $it;
    }
    /**
     * @depends testNext
     */
    public function testHasNext($it)
    {
        $expected = true;
        $this->assertEquals($expected, $it->hasNext());
        $book = $it->next();
        // 最終的にはFalseになる
        $expected = false;
        $this->assertEquals($expected, $it->hasNext());
    }
}
