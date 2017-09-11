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
}
