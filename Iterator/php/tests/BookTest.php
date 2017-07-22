<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Book.php';

/**
 * Iterator Book Test
 */
final class IteratorBookTest extends TestCase
{
    public function testGetName()
    {
        $expected = "book1";
        $book = new Book("book1");

        $this->assertEquals($expected, $book->getName());
    }
}
