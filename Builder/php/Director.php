<?php
require_once "Builder.php";

class Director
{
    private $buffer = '';
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }
}
