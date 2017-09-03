<?php

namespace State;

require_once __DIR__ . '/State.php';

/**
 * Stateを実装しているクラス。夜間の状態を表す
 *
 * @implements State
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class NightState implements State
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
            self::$singleton = new NightState();
        }
        return self::$singleton;
    }
    public function doClock(Context $context, int $hour)
    {
        if (9 <= $hour && $hour < 17) {
            $context->changeState(DayState::getInstance());
        }
    }
    public function doUse(Context $context)
    {
        $context->recordLog("非常: 夜間の金庫使用!");
    }
    public function doAlerm(Context $context)
    {
        $context->callSecurityCenter("非常ベル(夜間)");
    }
    public function doPhone(Context $context)
    {
        $context->callSecurityCenter("夜間の通話録音");
    }
    public function __toString()
    {
        return "[夜間]";
    }
}
