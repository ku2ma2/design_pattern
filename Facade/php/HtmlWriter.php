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
     * @access public
     * @param void
     * @return void
     */
    public function __construct(SplFileObject $writer)
    {
        $this->writer = $writer;
    }

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
    public function paragraph(string $msg)
    {
        try {
            $this->writer->fwrite("<p>{$msg}</p>".PHP_EOL);
        } catch (Exception $e) {
            echo '捕捉した例外: ' . $e->getMessage() . PHP_EOL;
        }
    }
    public function link(string $href, string $caption)
    {
        try {
            $this->writer->fwrite('<a href="'.$href.'">'.$caption.'</a>'.PHP_EOL);
        } catch (Exception $e) {
            echo '捕捉した例外: ' . $e->getMessage() . PHP_EOL;
        }
    }

    public function mail(string $mailaddr, string $username)
    {
        $this->link(
            "mailto:".$mailaddr,
            $username
        );
    }
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
