<?php

namespace Facade;

/**
 * メールアドレスからユーザ名を得るクラス
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class HtmlWriter
{
    private $writer;

    /**
     * コンストラクタ
     *
     * SplFileObjectを受け取ってクラス変数に
     *
     * @access public
     * @param void
     * @return void
     * @see http://php.net/manual/ja/class.splfileobject.php
     */
    public function __construct(\SplFileObject $writer)
    {
        $this->writer = $writer;
    }

    /**
     * タイトル表示を生成する
     *
     * @access public
     * @param string $title タイトル
     * @return void
     */
    public function title(string $title)
    {
        try {
            $this->writer->fwrite('<html>');
            $this->writer->fwrite('<head>');
            $this->writer->fwrite("<title>{$title}</title>");
            $this->writer->fwrite('<head>');
            $this->writer->fwrite('<body>'.PHP_EOL);
            $this->writer->fwrite("<h1>{$title}</h1>".PHP_EOL);
        } catch (Exception $e) {
            echo '捕捉した例外: ' . $e->getMessage() . PHP_EOL;
        }
    }

    /**
     * 段落生成(パラグラフ)
     *
     * @access public
     * @param string $msg 段落内のテキスト
     * @return void
     */
    public function paragraph(string $msg)
    {
        try {
            $this->writer->fwrite("<p>{$msg}</p>".PHP_EOL);
        } catch (Exception $e) {
            echo '捕捉した例外: ' . $e->getMessage() . PHP_EOL;
        }
    }

    /**
     * ハイパーリンクの生成
     *
     * @access public
     * @param string $href URL
     * @param string $caption リンクテキスト
     * @return void
     */
    public function link(string $href, string $caption)
    {
        try {
            $this->writer->fwrite('<a href="'.$href.'">'.$caption.'</a>'.PHP_EOL);
        } catch (Exception $e) {
            echo '捕捉した例外: ' . $e->getMessage() . PHP_EOL;
        }
    }

    /**
     * メールアドレスリンクの生成
     *
     * @access public
     * @param string $mailaddr メールアドレス
     * @param string $username 名前
     * @return void
     */
    public function mailto(string $mailaddr, string $username)
    {
        $this->link(
            "mailto:".$mailaddr,
            $username
        );
    }

    /**
     * 終端処理
     *
     * @access public
     * @param void
     * @return void
     */
    public function close()
    {
        try {
            $this->writer->fwrite("</body>");
            $this->writer->fwrite("</html>".PHP_EOL);
        } catch (Exception $e) {
            echo '捕捉した例外: ' . $e->getMessage() . PHP_EOL;
        }
    }
}
