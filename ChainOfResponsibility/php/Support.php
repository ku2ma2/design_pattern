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
    private $next = null;

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

    public function setNext(Support $next)
    {
        $this->next = $next;
        return $this->next;
    }

    final public function support(Trouble $trouble)
    {
        if ($this->resolve($trouble)) {
            $this->done($trouble);
        } elseif ($this->next != null) {
            $this->next->support($trouble);
        } else {
            $this->fail($trouble);
        }
    }

    abstract protected function resolve(Trouble $trouble);

    protected function done(Trouble $trouble)
    {
        echo "{$touble} is resolved by {$this}.\n";
    }

    protected function fail(Trouble $trouble)
    {
        echo "{$touble} cannot be resolved.\n";
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
