<?php
namespace prototype;

require_once "Product.php";

/**
 * インスタンス管理
 *
 * Product Interfaceを介して「登録」「複製」を行う
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Manager
{
    private $shocase = [];

    /**
     * インスタンス登録
     *
     * @access public
     * @param string $name インスタンスの登録名
     * @param Product $proto 登録をするインスタンス
     */
    public function register(string $name, Product $proto)
    {
        $this->showcase[$name] = $proto;
    }

    /**
     * インタンス複製
     *
     * Product Interfaceを利用してインスタンスを複製
     * PHPの場合はjavaと違ってcloneableのような仕組みはないので
     * createCloneのような実装をせずにそのまま「clone」でも
     * 良いと思う(ディープコピーの場合の処理は必要になるが)
     *
     * @access public
     * @param string $protoname インスタンスを呼び出す名前
     * @return Prototype $p->createClone 指定されたインスタンスをクローンする
     */
    public function create(string $protoname)
    {
        $p = $this->showcase[$protoname];
        return $p->createClone();
    }
}
