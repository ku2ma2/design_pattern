<?php

namespace listfactory;

require_once dirname(__DIR__) . '/factory/Tray.php';

/**
 * 大項目クラス
 *
 * Trayのサブクラスとしてフィールドの内容を使ってリストやトレイ
 * (項目)をまとめるクラス
 *
 * @access public
 *
 * @extends \factory\Tray
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class ListTray extends \factory\Tray
{
    /**
     * コンストラクタ
     *
     * 親(ここではPage)の抽象クラスのものを呼び出す
     *
     * @access public
     * @param string $caption トレイの説明(Caption)
     * @return void
     * @see \factory\Tray::__construct
     */
    public function __construct(string $caption)
    {
        parent::__construct($caption);
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
