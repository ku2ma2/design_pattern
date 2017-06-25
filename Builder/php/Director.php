<?php
require_once "Builder.php";

class Director
{
    private $buffer = '';
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }
    public function construct()
    {
        $this->builder->makeTitle("Greeting"); // タイトル
        $this->builder->makeString("朝から昼にかけて");
        $this->builder->makeItems([
            "おはようございます。",
            "こんにちは。"
        ]);
        $this->builder->makeString("夜に");
        $this->builder->makeItems([
            "こんばんは。",
            "おやすみなさい。",
            "さようなら。"
        ]);
        $this->builder->close(); // 文章を完成
    }
}
