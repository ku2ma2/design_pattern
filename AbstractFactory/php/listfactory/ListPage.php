<?php

namespace listfactory;

require_once dirname(__DIR__) . '/factory/Page.php';

/**
 * リスト表示クラス
 *
 * Pageのサブクラスとしてフィールドの内容を使ってページを
 * 構成している。
 *
 * @access public
 *
 * @extends Page
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 * @see \factory\Page
 */
class ListPage extends \factory\Page
{
    /**
     * コンストラクタ
     *
     * 親(ここではPage)の抽象クラスのものを呼び出す
     *
     * @access public
     * @param string $title タイトル
     * @param string $author 所有者
     * @return void
     * @see \factory\Page::__construct
     */
    public function __construct(string $title, string $author)
    {
        parent::__construct($title, $author);
    }

    /**
     * HTML生成
     *
     * 持ち合わせているクラス変数からHTMLの文字列を生成する
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
        $buffer .= "<html><head><title>{$this->title}</title></head>\n";
        $buffer .= "<body>\n";
        $buffer .= "<h1>{$this->title}</h1>\n";
        $buffer .= "<ul>\n";
        foreach ($this->content as $item) {
            $buffer .= $item->makeHTML();
        }
        $buffer .= "</ul>\n";
        $buffer .= "<hr><address>{$this->author}</address>\n";
        $buffer .= "</body></html>\n";

        return $buffer;
    }
}
