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

    /**
     * 自分をコピー(Clone)する
     *
     * シャローコピーなので、ディープコピーが必要であれば
     * __cloneの実装が必要
     * http://php.net/manual/ja/language.oop5.cloning.php
     * http://project-p.jp/halt/2013/06/24/100832/
     *
     *
     * @access public
     * @param void
     * @return void
     */
    public function createClone()
    {
        $p = null;
        try {
            // 自分自身のクローンを作成する
            $p = clone $this;
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
        }
        return $p;
    }
}
