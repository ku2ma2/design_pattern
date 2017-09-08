<?php
namespace proxy;

/**
 * PrinterとPrinterProxyに共通のインターフェース
 *
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
interface Pritable
{
    public function setPrinterName(string $name);
    public function getPrinterName();
    public function print(string $string);
}
