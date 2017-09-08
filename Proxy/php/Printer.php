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
    public function setPrinterName(string $name)
    {
    }
    public function getPrinterName()
    {
    }
    public function print(string $string)
    {
    }
}
