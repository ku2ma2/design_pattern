<?php
namespace prototype;

require_once "Product.php";

class Manager
{
    private $shocase = [];

    public function register(string $name, Product $proto)
    {
        return true;
    }
    public function create(string $prototype)
    {
    }
}
