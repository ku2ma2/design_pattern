<?php
require_once "Builder.php";

/**
 * HTMLファイル文章構築
 *
 * HTML形式のファイルをBuilderクラスを元に作成
 *
 * @access public
 * @extends Builder
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class HTMLBuilder extends Builder
{
    private $filename = '';
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
        // タイトルからファイル名を生成する
        $this->filename = $title . ".html";

        $this->buffer .= "<html><head><title>${title}</title></head><body>\n";
        $this->buffer .= "<h1>${title}</h1>\n";
    }

    /**
     * 文字列修飾
     *
     * 与えられた文字列をHTMLで装飾する
     *
     * @access public
     * @param string $str 変換する文字列
     * @return void
     */
    public function makeString(string $str)
    {
        $this->buffer .= "<p>$str</p>\n";
    }

    /**
     * リスト修飾
     *
     * 配列で提供された情報をHTML形式に修飾する
     *
     * @access public
     * @param array $items 変換配列
     * @return void
     */
    public function makeItems(array $items)
    {
        $this->buffer .= "<ul>\n";
        foreach ($items as $item) {
            $this->buffer .= "<li>{$item}</li>\n";
        }
        $this->buffer .= "</ul>\n";
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
        $this->buffer .= "</body></html>\n";

        // [CAUTION]: 本来保存をする処理になっているが
        // 保存パスなどが一時的なのでコメントアウトしている
        // file_put_contents($this->filename, $this->buffer);
        echo $this->buffer;
    }

    /**
     * バッファ提供
     *
     * クラス変数内で行われている文字列処理を現状のまま
     * 返す関数。Builderとしては必要ないがテストとしても利用している
     *
     * @access public
     * @param void
     * @return string $this->buffer
     */
    public function getBuffer()
    {
        return $this->buffer;
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
        return $this->filename;
    }
}
