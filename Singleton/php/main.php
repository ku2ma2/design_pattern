<?php

require_once "Singleton.php";

echo "Start.\n";
$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();


echo "End.\n";
