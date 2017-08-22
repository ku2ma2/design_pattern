<?php

namespace Observer;

/**
 * 数を生成するオブジェクトを表す抽象クラス
 *
 * 実際の数と、数を取得する部分はサブクラスに実装を期待
 *
 * @abstract
 * @access public
 * @implements SplSubject
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 * @see http://php.net/manual/ja/class.splobserver.php
 */
abstract class NumberGenerator implements \SplSubject
{
    private $observers = [];


    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }
    public function detach(\SplObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);

        if ($key) {
            unset($this->observers[$key]);
            return true;
        } else {
            throw new \OutOfRangeException('Observerが見つかりません');
            return false;
        }
    }
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    abstract public function getNumber();
    abstract public function execute();
}
