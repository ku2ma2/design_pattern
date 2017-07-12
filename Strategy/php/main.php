<?php

require_once "Player.php";
require_once "WinningStrategy.php";
require_once "ProbStrategy.php";

$player1 = new Player("Taro", new WinningStrategy());
$player2 = new Player("Hana", new ProbStrategy());

for ($i=0; $i<10000; $i++) {
    $nextHand1 = $player1->nextHand();
    $nextHand2 = $player2->nextHand();

    if ($nextHand1->isStrongerThan($nextHand2)) {
        echo "Winner:{$player1->toString()}\n";
        $player1->win();
        $player2->lose();
    } elseif ($nextHand2->isStrongerThan($nextHand1)) {
        echo "Winner:{$player2->toString()}\n";
        $player1->lose();
        $player2->win();
    } else {
        echo "Even...\n";
        $player1->even();
        $player2->even();
    }

    echo "Total result:\n";
    echo "{$player1->toString()}\n";
    echo "{$player2->toString()}\n";
    echo "----------------------------------------------\n";
}
