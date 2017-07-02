<?php

namespace factory;

require_once dirname(__DIR__) . '/listfactory/ListFactory.php';

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

    /**
     * 工場作成
     *
     * @access public
     * @static
     * @param string $classname 工場名(クラス名)
     * @return object $this->factory
     */
    public static function getFactory($classname)
    {
        $factory = null;
        try {
            $factory = new $classname;
        } catch (Exception $e) {
            echo "捕捉した例外：" . $e->getMessage() . "\n";
        }

        return $factory;
    }
    abstract public function createLink(string $caption, string $url);
    abstract public function createTray(string $caption);
    abstract public function createPage(string $title, string $author);
}
