<?php

class Singleton
{
    private static $singleton = false;

    final private function __construct()
    {
        echo "インスタンスを生成しました。\n";
    }

    public static function getInstance()
    {
        if (self::$singleton === false) {
            self::$singleton = new Singleton();
        }
        return self::$singleton;
    }
}
