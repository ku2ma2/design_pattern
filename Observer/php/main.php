<?php

require_once __DIR__ . '/RandomNumberGenerator.php';
require_once __DIR__ . '/DigitObserver.php';
require_once __DIR__ . '/GraphObserver.php';

$generator = new \Observer\RandomNumberGenerator();
$observer1 = new \Observer\DigitObserver();
$observer2 = new \Observer\GraphObserver();

$generator->attach($observer1);
$generator->attach($observer2);

$generator->execute();
