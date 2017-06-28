<?php

namespace factory;

require_once "Item.php";

/**
 * トレイ表現
 *
 * HTMLの構成要素を纏め上げるトレイを抽象的に表現しているクラス
 * Itemを継承しているので具体的なHTML生成に関してはItemで束縛している
 *
 * @abstract
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 * @see \factory\Item
 */
abstract class Tray extends Item
{
    protected $tray = [];

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $caption トレイの説明
     * @return void
     */
    public function __construct(string $caption)
    {
        $this->caption = $caption;
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
        $this->tray[] = $item;
    }
}
