<?php

namespace State;

require_once __DIR__."/Context.php";
require_once __DIR__."/UnauthorizedState.php";

/**
 * ログイン関連を保存するためのクラス
 *
 * @interface
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Login implements Context
{
    private $name;
    private $state;
    private $count = 0;

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $name ログイン名
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->state = UnauthorizedState::getInstance();
        $this->resetCount();
    }

    /**
     * 状態遷移
     *
     * 現在の状態を「認証済み」⇔「未認証」で切り替える
     *
     * @access public
     * @param void
     * @return void
     * @todo ここはstateを渡す形でも良いかもしれない。
     */
    public function switchState()
    {
        echo "状態遷移" . get_class($this->state) . "→";
        $this->state = $this->state->nextState();
        echo get_class($this->state) . "<br>";
        $this->resetCount();
    }

    /**
     * 認証されているか
     *
     * @access public
     * @param void
     * @return void
     */
    public function isAuthenticated()
    {
        return $this->state->isAuthenticated();
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
        return $this->state->getMenu();
    }

    /**
     * ユーザー名の取得
     *
     * @access public
     * @param void
     * @return void
     */
    public function getUserName()
    {
        return $this->name;
    }

    /**
     * カウント数の取得
     *
     * @access public
     * @param void
     * @return void
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * カウントをアップ
     *
     * @access public
     * @param void
     * @return void
     */
    public function incrementCount()
    {
        $this->count++;
    }

    /**
     * カウントのリセット
     *
     * @access public
     * @param void
     * @return void
     */
    public function resetCount()
    {
        $this->count = 0;
    }
}
