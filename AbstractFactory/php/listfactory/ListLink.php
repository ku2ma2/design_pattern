<?php

namespace listfactory;

require_once dirname(__DIR__) . '/factory/Link.php';

/**
 * リンク作成
 *
 * Linkのサブクラスとしてフィールドの内容を使ってリンクを作るクラス
 *
 * @access public
 *
 * @extends \factory\Link
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class ListLink extends \factory\Link
{
    /**
     * コンストラクタ
     *
     * 親(ここではLink)の抽象クラスのものを呼び出す
     *
     * @access public
     * @param string $caption リンク説明(タイトル)
     * @param string $url URL
     * @return void
     * @see \factory\Link::__construct
     */
    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption, $url);
    }

    /**
     * HTML生成
     *
     * 持ち合わせているクラス変数から具体的なHTMLの文字列を生成する
     * 途中でItemをループさせているので注意
     *
     * @access public
     * @param void
     * @return void
     * @see \factory\Item::makeHTML()
     */
    public function makeHTML()
    {
        $buffer = '';
        $buffer .= "<li>";
        $buffer .= "<a href=\"{$this->url}\">";
        $buffer .= "{$this->caption}";
        $buffer .= "</a>";
        $buffer .= "</li>\n";

        return $buffer;
    }
}
