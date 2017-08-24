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

    /**
     * Observerの登録
     *
     * @access public
     * @param object $obsever SplObserverオブジェクト
     * @return void
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * Observerの解除
     *
     * 与えられたObseverを観察者の対象から外す
     *
     * @access public
     * @param object $observer SplObseverオブジェクト
     * @return bool
     */
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

    /**
     * 観察者側(Observer側への通知)
     *
     * @access public
     * @param void
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    abstract public function getNumber();
    abstract public function execute();
}
