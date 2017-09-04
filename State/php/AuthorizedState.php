<?php

namespace State;

require_once __DIR__ . '/UserState.php';

/**
 * UserStateを実装しているクラス。認証されている状態を表わす
 *
 * @implements UserState
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
     */
    public static function getInstance()
    {
        if (self::$singleton === false) {
            self::$singleton = new AuthorizedState();
        }
        return self::$singleton;
    }

    /**
     * 認証されているかどうか
     *
     * @access public
     * @param void
     * @return bool
     */
    public function isAuthenticated()
    {
        return true;
    }

    /**
     * 次の状態へ遷移
     *
     * @access public
     * @param void
     * @return void
     */
    public function nextState()
    {
        return UnauthorizedState::getInstance();
    }

    /**
     * メニューの取得
     *
     * @access public
     * @param void
     * @return void
     */
    public function getMenu()
    {
        $menu = '<a href="?mode=inc">カウントアップ</a> | ';
        $menu .= '<a href="?mode=reset">リセット</a> | ';
        $menu .= '<a href="?mode=state">ログアウト</a> | ';

        return $menu;
    }

    /**
     * クローンを禁止
     *
     * このインスタンスの複製を許可しないようにしている。
     *
     * @final
     * @access public
     * @param void
     * @return void
     * @throws RuntimeException
     */
    final public function __clone()
    {
        throw new RuntimeException('Clone is not allowed against ' . get_class($this));
    }

    /**
     * 文字列表現
     *
     * @access public
     * @param void
     * @return string
     */
    public function __toString()
    {
        return "[認証済み]";
    }
}
