<?php

namespace ChainOfResponsiblity;

/**
 * トラブルを解決する抽象クラス
 *
 * @access public
 * @abstract
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Support
{
    private $name;
    private $next;

    /**
     * コンストラクタ
     *
     * @access public
     * @param int $name トラブル解決者名
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }


    /**
     * クラスの文字列表現
     *
     * フォーマット化されたトラブル解決者を返す
     *
     * @access public
     * @param void
     * @return string フォーマット化されたトラブル解決者
     */
    public function __toString()
    {
        return "[{$this->name}]";
    }
}
