<?php

namespace factory;

require_once "Item.php";

/**
 * HTML全体表現
 *
 * HTMLページ全体を抽象的に表現しているクラス
 *
 * @abstract
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Page
{
    protected $title;
    protected $author;
    protected $content = [];

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $title タイトル
     * @param string $author 所有者
     * @return void
     */
    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    /**
     * アイテム追加
     *
     * @access public
     * @param \factory\Item $item 情報
     * @return void
     * @see \factory\Item
     */
    public function add(Item $item)
    {
        $this->content[] = $item;
    }

    /**
     * 出力
     *
     * @access public
     * @param void
     * @return void
     */
    public function output()
    {
        try {
            $filename = $this->title + ".html";
            file_put_contents($filename, $this->makeHTML());
            echo "${filename}を作成しました。\n";
        } catch (Exception $e) {
            echo "捕捉した例外: " . $e->getMessage() . "\n";
        }
    }

    abstract public function makeHTML();
}
