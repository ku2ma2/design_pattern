<?php

require_once __DIR__ . '/Memento.php';
require_once __DIR__ . '/Gamer.php';


$gamer = new \Memento\Gamer(100);
$memento = $gamer->createMemento();

for ($i=0; $i<100; $i++) {
    echo "===={$i}\n";
    echo "現状:{$gamer}\n";
    $gamer->bet();
    echo "所持金は{$gamer->getMoney()}円になりました。\n";

    if ($gamer->getMoney() > $memento->getMoney()) {
        echo "     (だいぶ増えたので、現在の状態を保存しておこう)\n";
        $memento = $gamer->createMemento();
    } elseif ($gamer->getMoney() < ($memento->getMoney() / 2)) {
        echo "     (だいぶ減ったので、以前の状態に復帰しよう)\n";
        $gamer->restoreMemento($memento);
    }
}
