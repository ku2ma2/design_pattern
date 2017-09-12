<?php

require_once __DIR__.'/PrinterProxy.php';

$p = new \Proxy\PrinterProxy('Alice');
echo "名前は現在 {$p->getPrinterName()} です。\n";
$p->setPrinterName('Bob');
echo "名前は現在 {$p->getPrinterName()} です。\n";
$p->print('Hello, world.');
