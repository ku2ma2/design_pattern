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
    public function __construct(string $owner)
    {
        echo $owner . "のカードを作ります\n";
        $this->owner = $owner;
    }
    public function use()
    {
        echo $this->owner . "のカードを使います\n";
    }
    public function getOwner()
    {
        return $this->owner;
    }
}
