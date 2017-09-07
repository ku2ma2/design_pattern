<?php
if (!isset($argv) || count($argv) != 2) {
    echo "Usage: php main.php number\n";
    echo "  Exapmple: php main.php 1312\n\n";
    exit(1);
}

require_once __DIR__ . "/BigString.php";

$string = new \Flyweight\BigString($argv[1]);
$string->print();
