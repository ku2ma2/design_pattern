<?php

namespace State;

require_once __DIR__ . '/State.php';

/**
 * Stateを実装しているクラス。昼間の状態を表す
 *
 * @implements State
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class DayState implements State
{
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
     * @see Class::function
     * @todo TODO
     */
    public static function getInstance()
    {
        if (self::$singleton === false) {
            self::$singleton = new DayState();
        }
        return self::$singleton;
    }
    public function doClock(Context $context, int $hour)
    {
        if ($hour < 9 || 17 <= $hour) {
            $context->changeState(NightState::getInstance());
        }
    }
    public function doUse(Context $context)
    {
        $context->recordLog("金庫使用(昼間)");
    }
    public function doAlerm(Context $context)
    {
        $context->callSecurityCenter("非常ベル(昼間)");
    }
    public function doPhone(Context $context)
    {
        $context->callSecurityCenter("通常の通話(昼間)");
    }
    public function __toString()
    {
        return "[昼間]";
    }
}
