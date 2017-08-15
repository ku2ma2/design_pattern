<?php

namespace ChainOfResponsibility;

require_once __DIR__ . "/Support.php";

/**
 * トラブル解決する具象クラス(指定した番号未満のトラブルを解決)
 *
 * @access public
 * @extends Support
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class LimitSupport extends Support
{
    private $limit;

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $name トラブル解決者名
     * @param int $limit この数字未満であれば解決する
     * @return void
     */
    public function __construct(string $name, int $limit)
    {
        parent::__construct($name);
        $this->limit = $limit;
    }

    /**
     * 解決用メソッド
     *
     * limit未満であれば解決をする
     *
     * @access protected
     * @param Trouble $trouble トラブルインスタンス
     * @return void
     */
    protected function resolve(Trouble $trouble)
    {
        if ($trouble->getNumber() < $this->limit) {
            return true;
        } else {
            return false;
        }
    }
}
