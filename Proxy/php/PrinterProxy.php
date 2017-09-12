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
class PrinterProxy implements Printable
{
    private $name;
    private $real = null;

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $name プリンタ名
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
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
        if ($this->real != null) {
            $this->real->setPrinterName($name);
        }
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

    /**
     * 実際の表示
     *
     * @access public
     * @param string $string 表示する文字列
     * @return void
     */
    public function print(string $string)
    {
        $this->realize();
        $this->real->print($string);
    }

    /**
     * 「本人」本当のプリンターを生成
     *
     * @access private
     * @param void
     * @return void
     */
    private function realize()
    {
        if ($this->real == null) {
            $this->real = new Printer($this->name);
        }
    }
}
