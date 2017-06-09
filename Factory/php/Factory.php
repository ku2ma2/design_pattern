<?php

namespace framework;

require_once "Product.php";

use framework\Product as Product;

/**
 * Factoryクラス
 *
 * 製品をどう作って登録するかを規定している
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Factory
{

    /**
     * 製品(Product)作成
     *
     * @access public
     * @final
     * @param string $owner 所有者名
     * @return Object $p 製品オブジェクト
     */
    final public function create(string $owner)
    {
        $p = $this->createProduct($owner);
    }
    abstract protected function createProduct(string $owner);
    abstract protected function registerProduct(Product $product);
}
