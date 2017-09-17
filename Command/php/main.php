<?php

require_once __DIR__.'/Queue.php';
require_once __DIR__.'/TouchCommand.php';
require_once __DIR__.'/CompressCommand.php';
require_once __DIR__.'/CopyCommand.php';
require_once __DIR__.'/File.php';

$queue = new \Command\Queue();
$file = new \Command\FIle('sample.txt');

$queue->addCommand(new \Command\TouchCommand($file));
$queue->addCommand(new \Command\CompressCommand($file));
$queue->addCommand(new \Command\CopyCommand($file));

$queue->run();
