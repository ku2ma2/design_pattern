<?php

require_once "Aggregate.php";
require_once "Book.php";
require_once "BookShelfIterator.php";

class BookShelf implements Aggregate
{
    private $books;
    private $last = 0;

    /**
     * コンストラクタ
     *
     * クラス生成時にBook(本)の数を指定してその分の配列として
     * Bookshelf(本棚)を作成
     *
     * @acceess public
     * @param int $maxsize
     * @return void
     */
    public function __construct($maxsize)
    {
        $this->books = new SplFixedArray($maxsize);
    }

    /**
     * 本棚から本を取得
     *
     * 与えられたBookShelf(本棚)のキー(index)からBook(本)のデータを返す
     *
     * @access public
     * @param int $index 本棚のキー
     * @return Object $books Booksオブジェクト
     */
    public function getBookAt($index)
    {
        return $this->books[$index];
    }

    /**
     * 本(Book)の追加
     *
     * 本棚(BookShelf)に本(Book)を追加する
     * 現状は配列上の最後に追加する形
     *
     * @access public
     * @param Object $book Booksオブジェクト
     * @return void
     */
    public function appendBook(Book $book)
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    /**
     * 本(Book)の数取得
     *
     * @access public
     * @param void
     * @return int $this->last 索引の最後の数
     */
    public function getLength()
    {
        return $this->last;
    }

    /**
     * イテレーター作成
     *
     * BooksShelf(本棚)用のイテレータを作成する
     *
     * @access public
     * @param void
     * @return Object BooksShelfIterator
     * @see BookShelfIterator::__construct
     */
    public function iterator()
    {
        $bookshelf_iterator = new BookShelfIterator($this);
        return $bookshelf_iterator;
    }
}
