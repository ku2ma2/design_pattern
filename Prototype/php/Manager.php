<?php
namespace prototype;

require_once "Product.php";

class Manager
{
    private $shocase = [];

    public function register(string $name, Product $proto)
    {
        $this->showcase[$name] = $proto;
    }
    public function create(string $protoname)
    {
        $p = $this->showcase[$protoname];
        return $p->createClone();
    }
}
