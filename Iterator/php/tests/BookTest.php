<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Book.php';

/**
 *
 */
final class BookTest extends TestCase
{
    public function testGetName()
    {
        $book = new Book("book1");

        $this->assertEquals($book->getName(), "book1");
    }
}
