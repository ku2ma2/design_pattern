<?php

class Hand
{
    const HANDVALUE_GUU = 0; // ぐー
    const HANDVALUE_CHO = 1; // チョキ
    const HANDVALUE_PAA = 2; // パー

    private static $hand = false; // 配列となりここにHandインスタンスが格納
    private $handvalue; // じゃんけんの手の値

    /**
     * コンストラクタ
     *
     * ここでは与えられたじゃんけんを表す値(handvalue)から
     * Handインスタンスを生成するのみ、ただし実際の生成を行われるのは
     * getHand となりこれはSingletonとして利用される。
     *
     * @final
     * @access private
     * @param int $handvalue ラベル
     * @return void
     * @see Hand::getHand
     */
    final private function __construct(int $handvalue)
    {
        $this->handvalue = $handvalue;
    }

    /**
     * Hand生成
     *
     * SingletoとしてここでHandインスタンスが生成される。
     * hand配列の中にHandインスタンスをラベル付きで入れる形になる。
     *
     * @static
     * @access public
     * @param int $handvalue 取得するじゃんけん手役ラベル
     * @return Hand::$hand
     */
    public static function getHand(int $handvalue)
    {
        if (self::$hand === false) {
            self::$hand = [];
            self::$hand[self::HANDVALUE_GUU] = new Hand(self::HANDVALUE_GUU);
            self::$hand[self::HANDVALUE_CHO] = new Hand(self::HANDVALUE_CHO);
            self::$hand[self::HANDVALUE_PAA] = new Hand(self::HANDVALUE_PAA);
        }
        return self::$hand[$handvalue];
    }

    /**
     * 強いか判定
     *
     * 保持している手役と与えられたインスタンスの手役を比較して
     * 「保持している手役」が強いかどうかをBooleanで返す
     *
     * @access public
     * @param object Hand $h Handインスタンス
     * @return boolean 強いかどうか
     */
    public function isStrongerThan(Hand $h)
    {
        return ($this->fight($h) === 1);
    }

    /**
     * 弱いか判定
     *
     * 保持している手役と与えられたインスタンスの手役を比較して
     * 「保持している手役」が弱いかどうかをBooleanで返す
     *
     * @access public
     * @param object Hand $h Handインスタンス
     * @return boolean 弱いかどうか
     */
    public function isWeakerThan(Hand $h)
    {
        return ($this->fight($h) === -1);
    }

    /**
     * じゃんけん勝ち負け判定
     *
     * 与えられたHandインスタンスが保持しているインスタンスとのじゃんけん勝負
     * を行い、結果を値で返す
     * - 勝ち : 1
     * - 負け : -1
     * - 引き分け : 0
     *
     * @access private
     * @param object Hand $h 比較するインスタンス
     * @return int 勝ち負けコード
     */
    private function fight(Hand $h)
    {
        if ($this === $h) {
            // 引き分けだった場合は 0
            return 0;
        } elseif ((($this->handvalue + 1) % 3) == $h->handvalue) {
            // 勝負に勝った(hが強かった場合)は 1
            return 1;
        } else {
            // 勝負に負けた(hが弱かった場合は)は -1
            return -1;
        }
    }
}
