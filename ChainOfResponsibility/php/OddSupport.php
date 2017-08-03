<?php

namespace ChainOfResponsibility;

require_once __DIR__ . "/Support.php";

/**
 * トラブルを解決する具象クラス(奇数番号のトラブルを解決)
 *
 * @access public
 * @extends Support
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class OddSupport extends Support
{

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $name トラブル解決者名
     * @return void
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    /**
     * 解決用メソッド
     *
     * 奇数であれば解決する
     *
     * @access protected
     * @param Trouble $trouble トラブルインスタンス
     * @return void
     */
    protected function resolve(Trouble $trouble)
    {
        if ($trouble->getNumber() % 2 == 1) {
            return true;
        } else {
            return false;
        }
    }
}
