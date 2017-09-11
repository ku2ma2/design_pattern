<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Printer.php';
/**
 * Proxy Printer Test
 */
final class ProxyPrinterTest extends TestCase
{
    public function test_contruct_重い処理のメッセージが表示、実際にはheavyJobのテスト()
    {
        $expected = "Printerのインスタンスを生成中\n.....完了。\n";
        $expected .= "Printerのインスタンス(プリンタ1)を生成中\n.....完了。\n";
    
        $printer = new \Proxy\Printer('プリンタ1');

        $this->expectOutputString($expected);
    }

    public function test_getPrinterName_プリンタの名前を設定()
    {
        $output_expected = "Printerのインスタンスを生成中\n.....完了。\n";
        $output_expected .= "Printerのインスタンス(プリンタ2)を生成中\n.....完了。\n";
        $expected = 'プリンタ2';
    
        $printer = new \Proxy\Printer('プリンタ2');
        $printer->setPrinterName('プリンタ2');

        $this->expectOutputString($output_expected);

        $actual = $printer->getPrinterName();
        $this->assertEquals($actual, $expected);
    }

    public function test_print_プリンタの名前付きで文字列を出力()
    {
        $output_expected = "Printerのインスタンスを生成中\n.....完了。\n";
        $output_expected .= "Printerのインスタンス(プリンタ3)を生成中\n.....完了。\n";
        $output_expected .= "=== プリンタ3 ===\n";
        $output_expected .= "テスト出力します\n";
    
        $printer = new \Proxy\Printer('プリンタ3');
        $printer->setPrinterName('プリンタ3');
        $printer->print('テスト出力します');

        $this->expectOutputString($output_expected);
    }
}
