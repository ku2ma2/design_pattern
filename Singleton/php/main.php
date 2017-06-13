<?php

require_once "Singleton.php";

echo "Start.\n";
$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();

if ($obj1 === $obj2) {
    echo "obj1とobj2は同じインスタンスです。\n";
} else {
    echo "obj1とobj2は同じインスタンスではありません。\n";
}

echo "End.\n";
