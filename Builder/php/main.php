<?php

require_once "Director.php";
require_once "TextBuilder.php";
require_once "HTMLBuilder.php";

function usage()
{
    echo "Usage: php main.php plain\n";
    echo "Usage: php main.php html\n";
}
if (count($argv) != 2) {
    usage();
    exit(1);
}

if ($argv[1] === "plain") {
    $textbuilder = new TextBuilder();
    $director = new Director($textbuilder);
    $director->construct();
    $result = $textbuilder->getResult();
    echo $result . "\n";
} elseif ($argv[1] === "html") {
    $htmlbuiilder = new HTMLBuilder();
    $director = new Director($htmlbuiilder);
    $director->construct();
    $result = $htmlbuiilder->getResult();
    echo $result . "\n";
} else {
    usage();
    exit(0);
}
