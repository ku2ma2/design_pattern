<?php

namespace State;

require_once __DIR__ . '/UserState.php';

/**
 * Stateを実装しているクラス。昼間の状態を表す
 *
 * @implements State
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class AuthorizedState implements UserState
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
            self::$singleton = new AuthorizedState();
        }
        return self::$singleton;
    }
    public function isAuthenticated()
    {
        return true;
    }
    public function nextState()
    {
        return UnauthorizedState::getInstance();
    }
    public function getMenu()
    {
        $menu = '<a href="?mode=inc">カウントアップ</a> | ';
        $menu .= '<a href="?mode=reset">リセット</a> | ';
        $menu .= '<a href="?mode=state">ログアウト</a> | ';

        return $menu;
    }

    /**
     * このインスタンスの複製を許可しないようにする
     * @throws RuntimeException
     */
    final public function __clone()
    {
        throw new RuntimeException('Clone is not allowed against ' . get_class($this));
    }

    public function __toString()
    {
        return "[認証済み]";
    }
}
