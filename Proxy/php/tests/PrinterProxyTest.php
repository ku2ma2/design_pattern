<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/PrinterProxy.php';
/**
 * Proxy PrinterProxy Test
 */
final class ProxyPrinterProxyTest extends TestCase
{
    public function test_getPrinterName_プリンター名の取得()
    {
        $expected = "ProxyPrinter(1)";
        $printer = new \Proxy\PrinterProxy("ProxyPrinter(1)");
        $actual = $printer->getPrinterName();

        $this->assertEquals($actual, $expected);
    }

    public function test_realize_プリンター名の取得()
    {
        $expected = "ProxyPrinter(1)";
        $printer = new \Proxy\PrinterProxy("ProxyPrinter(1)");
        $actual = $printer->getPrinterName();

        $this->assertEquals($actual, $expected);
    }

    public function test_setPrinterName_プリンターを設定()
    {
        $output_expected = "Printerのインスタンスを生成中\n.....完了。\n";
        $output_expected .= "Printerのインスタンス(Bob)を生成中\n.....完了。\n";
        $output_expected .= "=== Bob ===\n";
        $output_expected .= "テスト出力します\n";
    
        $printer = new \Proxy\PrinterProxy('Printer');
        $printer->setPrinterName('Bob');
        $printer->print('テスト出力します');

        $this->expectOutputString($output_expected);
    }
}
