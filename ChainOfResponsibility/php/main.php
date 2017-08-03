<?php

require_once __DIR__ . "/NoSupport.php";
require_once __DIR__ . "/LimitSupport.php";
require_once __DIR__ . "/OddSupport.php";
require_once __DIR__ . "/SpecialSupport.php";
require_once __DIR__ . "/Trouble.php";

use \ChainOfResponsibility as COR;

$alice  = new COR\NoSupport("Alice");
$bob    = new COR\LimitSupport("Bob", 100);
$chalie = new COR\SpecialSupport("Charlie", 429);
$diana  = new COR\LimitSupport("Diana", 200);
$elmo   = new COR\OddSupport("Elmo");
$fred   = new COR\LimitSupport("Fred", 200);

// 邪悪な感じ
$alice->setNext($bob)->setNext($chalie)->setNext($diana)->setNext($elmo)->setNext($fred);

for ($i=0; $i< 500; $i++) {
    $alice->support(new COR\Trouble($i));
}
