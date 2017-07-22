<?php

require_once __DIR__ . '/StringDisplay.php';
require_once __DIR__ . '/FullBorder.php';
require_once __DIR__ . '/SideBorder.php';

use Decorator\StringDisplay;
use Decorator\SideBorder;
use Decorator\FullBorder;

$b1 = new StringDisplay("Hello,world.");
$b2 = new SideBorder($b1, '#');
$b3 = new FullBorder($b2);

$b1->show();
$b2->show();
$b3->show();

$b4 = new SideBorder(
    new FullBorder(
        new FullBorder(
            new SideBorder(
                new FullBorder(
                    new StringDisplay("Hello, Border.")
                ),
                '*'
            )
        )
    ),
    '/'
);

$b4->show();
