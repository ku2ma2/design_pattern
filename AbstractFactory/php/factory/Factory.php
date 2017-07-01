<?php

namespace factory;

require_once dirname(__DIR__) . '/listfactory/ListFactoray.php';

/**
 * 抽象的な工場
 *
 * AbstractFactoryの中心となる抽象的な工場作成クラス
 * 引数として与えられた文字列からClassを生成することで実現している。
 * 作成されたクラスが「工場」となる
 *
 * @abstract
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class Factory
{
    private $factory = [];

    /**
     * 工場作成
     *
     * @access public
     * @param string $classname 工場名(クラス名)
     * @return object $this->factory
     */
    public function getFactory(string $classnane)
    {
        try {
            $this->factory = new $classname;
        } catch (Exception $e) {
            echo "捕捉した例外：" . $e->getMessage() . "\n";
        }
    }
}
