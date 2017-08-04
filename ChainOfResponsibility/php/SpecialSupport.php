<?php

namespace ChainOfResponsibility;

require_once __DIR__ . "/Support.php";

/**
 * トラブルを解決する具象クラス(指定番号のトラブルを解決)
 *
 * @access public
 * @extends Support
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class SpecialSupport extends Support
{
    private $number;

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $name トラブル解決者名
     * @param int $number 解決番号
     * @return void
     */
    public function __construct(string $name, int $number)
    {
        parent::__construct($name);
        $this->number = $number;
    }

    /**
     * 解決用メソッド
     *
     * 設定された指定番号と同じであればTRUE
     *
     * @access protected
     * @param Trouble $trouble トラブルインスタンス
     * @return void
     */
    protected function resolve(Trouble $trouble)
    {
        if ($trouble->getNumber() == $this->number) {
            return true;
        } else {
            return false;
        }
    }
}
