<?php

namespace Facade;

require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/HtmlWriter.php";

/**
 * メールアドレスからユーザ名を得るクラス
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class PageMaker
{
    private $writer;

    /**
     * コンストラクタ
     *
     * 利用しないように privateとfinalを追加
     *
     * @final
     * @access private
     * @param void
     * @return void
     */
    final private function __construct()
    {
    }

    /**
     * ウェルカムページの作成
     *
     * @static
     * @access public
     * @param string $mailaddr メールアドレス
     * @param string $filename ファイル名
     * @return
     */
    public static function makeWelcomePage(string $mailaddr, string $filename)
    {
        try {
            $mailprop = \Facade\Database::getProperties('maildata');
            $username = $mailprop[$mailaddr];
            $write = new \Facade\HtmlWriter(new \SplFileObject($filename, 'w+'));
            $write->title("Welcome to {$username}'s page!");
            $write->paragraph("{$username}のページへようこそ");
            $write->paragraph("メール待ってますね");
            $write->mailto($mailaddr, $username);
            $write->close();
            echo "{$filename} is created for {$mailaddr} ({$username})";
        } catch (Exception $e) {
            echo '捕捉した例外: ' . $e->getMessage() . PHP_EOL;
        }
    }
}
