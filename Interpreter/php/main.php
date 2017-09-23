<?php

require_once __DIR__ . '/ProgramNode.php';

$f = file(__DIR__ . "/Program.txt", FILE_IGNORE_NEW_LINES);
if (empty($f)) {
    die('file read error.');
}

try {
    foreach ($f as $v) {
        echo "text = \"" . $v . "\"" . PHP_EOL;
        $node = new \Interpreter\ProgramNode();
        $node->parse(new \Interpreter\Context($v));
        echo "node = " . $node . PHP_EOL;
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}
