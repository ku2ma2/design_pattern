<?php

abstract class Builder
{
    abstract public function makeTitle(string $title);
    abstract public function makeString(string $str);
    abstract public function makeItems(array $items);
    abstract public function close();
}
