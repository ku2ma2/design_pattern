<?php
namespace prototype;

require_once "Product.php";

/**
 * 下線を引く
 *
 * 与えられた文字列に下線を引く管理は上位のManagerによって行われる。
 *
 * @access public
 * @implements Product
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class UnderlinePen implements Product
{
    private $ulchar;

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $ulchar 下線を引く文字
     * @return void
     */
    public function __construct(string $ulchar)
    {
        $this->ulchar = $ulchar;
    }

    /**
     * 処理実行(下線)
     *
     * 実際にこのクラスの義務である下線を引く
     *
     * @access public
     * @param string $s 下線を引く文字列
     * @return void
     */
    public function use(string $s)
    {
        $length = mb_strlen($s);
        
        echo "\"${s}\"\n";
        for ($i=0; $i< $length; $i++) {
            echo $this->ulchar;
        }
        echo "\n";
    }

    public function createClone()
    {
        return true;
    }
}
