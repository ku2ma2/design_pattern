<?php

namespace Flyweight;

/**
 * BigCharのインスタンスを共有しながら生成するクラス
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class BigCharFactory
{
    private $pool = [];
    private static $singleton = false;
    
    /**
     * コンストラクタ
     *
     * Singletonで実装するので final と private を追加して新しく
     * インスタンスを作成されないようにしている
     *
     * @access private
     * @final
     * @param void
     * @return void
     */
    final private function __construct()
    {
        ;
    }
    /**
     * インスタンス作成
     *
     * @access public
     * @param void
     * @return object self::$ingleton ただ一つのインスタンス
     */
    public static function getInstance()
    {
        if (self::$singleton === false) {
            self::$singleton = new BigCharFactory();
        }
        return self::$singleton;
    }

    /**
     * 大きな文字取得
     *
     * 一度poolに保存してキーにマッチしたものを返すという
     * キャッシュのような機構になっている。
     *
     * @access public
     * @param void
     * @return void
     * @see Class::function
     * @todo TODO
     */
    public function getBigChar(string $charname)
    {
        if (!isset($this->pool[$charname])) {
            $this->pool[$charname] = new BigChar($charname);
        }
        return $this->pool[$charname];
    }
}
