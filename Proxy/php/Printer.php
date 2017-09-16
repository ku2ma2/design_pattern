<?php
namespace proxy;

require_once __DIR__ . '/Printable.php';

/**
 * 名前付きのプリンタを表すクラス(本人)
 *
 * @access public
 * @implements Printable
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Printer implements Printable
{
    private $name;

    /**
     * コンストラクタ
     *
     * 重処理(heavyJob)を起動する
     *
     * @access public
     * @param string $name
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->heavyJob("Printerのインスタンスを生成中");
        $this->heavyJob("Printerのインスタンス({$this->name})を生成中");
    }

    /**
     * プリンタ名を設定
     *
     * @access public
     * @param string $name プリンタ名
     * @return void
     */
    public function setPrinterName(string $name)
    {
        $this->name = $name;
    }

    /**
     * プリンタ名の取得
     *
     * @access public
     * @param void
     * @return string $this->name プリンタ名
     */
    public function getPrinterName()
    {
        return $this->name;
    }

    public function print(string $string)
    {
        echo "=== {$this->name} ===\n";
        echo $string . "\n";
    }

    /**
     * 重い処理(のつもり)
     *
     * @access private
     * @param string $msg メッセージ
     * @return void
     */
    private function heavyJob(string $msg)
    {
        echo $msg."\n";

        for ($i=0; $i<5; $i++) {
            // 他のテストで重くなるので 0.01秒にしてある
            // Proxyのテストをする場合は数を大きくして重い処理にする
            usleep(1000);
            echo ".";
        }
        echo "完了。\n";
    }
}
