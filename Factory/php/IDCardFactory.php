<?php

namespace idcard;

require_once "Factory.php";
require_once "Product.php";
require_once "IDCard.php";

/**
 * 認証番号カードFactoryクラス
 *
 * IDCardのインスタンスを作成して実際に認証番号カードを製作する
 *
 * @access public
 * @extends \framework\Factory
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 * @see \idcard\IDCard::__construct
 */
class IDCardFactory extends \framework\Factory
{
    private $owners = [];

    /**
     * カード生成
     *
     * 製品である認証番号カードを生成する
     *
     * @access protected
     * @param string $owner 認証番号カード所有者名
     * @return object IDCard
     * @see IDCard::__construct
     */
    public function createProduct(string $owner)
    {
        return new IDCard($owner);
    }

    protected function registerProduct(\framework\Product $product)
    {
        $this->owners[] = $product->getOwner();
    }
    public function getOwners()
    {
        return $this->owners;
    }
}
