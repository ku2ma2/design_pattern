<?php

/**
 * バナー(Banner)
 *
 * ここではバナーと表現される文字列を改変するための機能をまとめたクラス
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Banner
{
    private $string;

    /**
     * コンストラクタ
     *
     * 引数をプライベートなクラス変数に入れる
     *
     * @access public
     * @param string $string 文字列
     * @return void
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * 括弧をつける
     *
     * 与えられた文字列の両端に括弧をつけて出力する
     *
     * @access public
     * @param void
     * @return void
     */
    public function showWithParen()
    {
        // 本来はechoで出力するが、テスト的な観点から値を返すように変更
        // echo '('.$this->string.')'."\n";
        return '('.$this->string.')';
    }

    /**
     * アスタリスクをつける
     *
     * 与えられた文字列の両端にアスタリスク(*)をつけて出力する
     *
     * @access public
     * @param void
     * @return void
     */
    public function showWithAster()
    {
        // 本来はechoで出力するが、テスト的な観点から値を返すように変更
        // echo '*'.$this->string.'*'."\n";
        return '*'.$this->string.'*';
    }
}
