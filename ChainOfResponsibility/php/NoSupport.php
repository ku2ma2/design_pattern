<?php

namespace ChainOfResponsibility;

require_once __DIR__ . "/Support.php";

/**
 * トラブルを解決する具象クラス(常に「解決しない」)
 *
 * @access public
 * @extends Support
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class NoSupport extends Support
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
     * ここでは自分では何もせずに必ず「false」を返す
     *
     * @access protected
     * @param Trouble $trouble トラブルインスタンス
     * @return bool
     */
    protected function resolve(Trouble $trouble)
    {
        return false;
    }
}
