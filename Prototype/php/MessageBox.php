<?php
namespace prototype;

require_once "Product.php";

/**
 * 文字で飾り枠を作る
 *
 * 与えられた文字で飾り枠を作りそれで文字列を囲むクラス
 * このクラスの生成自体は上位のManagerによって行われる。
 *
 * @access public
 * @implements Product
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class MessageBox implements Product
{
    // 飾り文字
    private $decochar;

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $decochar 飾り枠を作る文字
     * @return void
     */
    public function __construct(string $decochar)
    {
        $this->decochar = $decochar;
    }

    /**
     * 処理実行(飾り枠)
     *
     * 実際にこのクラスの義務である飾り枠を作る
     *
     * @access public
     * @param string $s 下線を引く文字列
     * @return void
     */
    public function use(string $s)
    {
        $length = mb_strlen($s);
        $decoline = "";

        // 飾り線作成
        for ($i=0; $i< $length + 4; $i++) {
            $decoline .= $this->decochar;
        }
        $decoline .= "\n";
      
        // 最終的に出力
        echo $decoline;
        echo "{$this->decochar} ${s} {$this->decochar}\n";
        echo $decoline;
    }

    public function createClone()
    {
        return true;
    }
}
