<?php

namespace factory;

require_once "Item.php";

/**
 * リンク表現
 *
 * HTMLのハイパーリンクを抽象的に表現している
 * Itemを継承しているので具体的なHTML生成に関してはItemで束縛している
 *
 * @abstract
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 * @see \factory\Item
 */
abstract class Link extends Item
{
    protected $url = '';

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $caption トレイの説明
     * @return void
     */
    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption);
        $this->url = $url;
    }
}
