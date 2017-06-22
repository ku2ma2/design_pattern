<?php
require_once "Builder.php";

/**
 * テキストファイル文章構築
 *
 * テキスト形式のファイルをBuilderクラスを元に作成
 *
 * @access public
 * @extends Builder
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class TextBuilder extends Builder
{
    private $buffer = '';

    /**
     * タイトル生成
     *
     * 与えられた文字列からタイトルを生成する。
     * テストの関係で直接ファイルにではなくBufferに書き込んでいる
     *
     * @access public
     * @param string $title タイトル文字列
     * @return void
     */
    public function makeTitle(string $title)
    {
        $this->buffer .= '=============================='."\n";
        $this->buffer .= "『{$title}』\n";
        $this->buffer .= "\n";
    }

    /**
     * 文字列修飾
     *
     * 与えられた文字列をテキストで装飾する
     *
     * @access public
     * @param string $str 変換する文字列
     * @return void
     */
    public function makeString(string $str)
    {
        $this->buffer .= "■{$str}\n";
        $this->buffer .= "\n";
    }

    /**
     * リスト修飾
     *
     * 配列で提供された情報をテキスト形式に修飾する
     *
     * @access public
     * @param array $items 変換配列
     * @return void
     */
    public function makeItems(array $items)
    {
        foreach ($items as $item) {
            $this->buffer .= "　・{$item}\n";
        }
        $this->buffer .= "\n";
    }

    /**
     * 終端処理
     *
     * 文章作成の最後に行われる処理
     *
     * @access public
     * @param void
     * @return void
     */
    public function close()
    {
        $this->buffer .= '=============================='."\n";
    }

    /**
     * 結果セット
     *
     * 最終的な結果セットを返す。ここでは保存をしたファイル名を
     * 返している。
     *
     * @access public
     * @param void
     * @return string $this->filename
     */
    public function getResult()
    {
        return $this->buffer;
    }
}
