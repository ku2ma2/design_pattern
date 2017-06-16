<?php
namespace prototype;

interface Product
{
    public function use(string $s);
    public function createClone();
}
