<?php

namespace idcard;

require_once "Product.php";

/**
 * ディスプレイのテンプレート
 *
 * 拡張されたサブクラスに指定されたメソッドの実装を強制する
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Factory
{

    /**
     * 商品(Product)作成
     *
     * @access public
     * @final
     * @param string $owner 所有者名
     * @return Object $p 商品オブジェクト
     */
    final public function create($owner)
    {
        $p = $this->createProduct($owner);
    }
    abstract protected function createProduct($owner);
    abstract protected function registerProduct($product);
}
