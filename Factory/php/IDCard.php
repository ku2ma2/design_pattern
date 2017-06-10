<?php

namespace idcard;

require_once "Product.php";

/**
 * 認証番号カード
 *
 * 製品Productクラスのサブクラスとして認証番号カードを管理する
 *
 * @access public
 * @extends \framework\Product
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class IDCard extends \framework\Product
{
    private $owner;

    /**
     * コンストラクタ
     *
     * 与えられた名前から認証番号カードを作成する
     *
     * @access public
     * @param string $owner 認証番号カード所有者
     * @return void
     */
    public function __construct(string $owner)
    {
        echo $owner . "のカードを作ります\n";
        $this->owner = $owner;
    }

    /**
     * 認証番号カード使用
     *
     * @access public
     * @param void
     * @return void
     */
    public function use()
    {
        echo $this->owner . "のカードを使います\n";
    }

    /**
     * 認証番号カード取得
     *
     * @access public
     * @param void
     * @return string $this->owner 認証番号カード所有者
     */
    public function getOwner()
    {
        return $this->owner;
    }
}
