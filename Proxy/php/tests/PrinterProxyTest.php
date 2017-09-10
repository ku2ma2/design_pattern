<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/PrinterProxy.php';
/**
 * Proxy PrinterProxy Test
 */
final class ProxyPrinterProxyTest extends TestCase
{
    public function test_contruct_重い処理のメッセージが表示、実際にはheavyJobのテスト()
    {
        $expected = "インスタンスを生成中\n.....完了。\n";
        $printer = new \Proxy\PrinterProxy();

        $this->expectOutputString($expected);
    }
}
