<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Hand.php';

/**
 * Hand Test
 * @todo: toString 文字列変換のテストを追加する
 */
final class HandTest extends TestCase
{
    public function test_同じぐーで生成されたインスタンスは同じものである()
    {
        $guu1 = Hand::getHand(0); // ぐーを作る
        $guu2 = Hand::getHand(0); // ぐーを作る

        $this->assertSame($guu1, $guu2);
    }
    public function test_違う手役で生成されたインスタンスは違うものである()
    {
        $choki = Hand::getHand(1); // チョキを作る
        $paa = Hand::getHand(2); // パーを作る

        $this->assertNotSame($choki, $paa);
    }
    public function test_強いか判定_ぐーはチョキより強いは「正しい」()
    {
        $guu = Hand::getHand(0); // ぐーを作る
        $choki = Hand::getHand(1); // チョキを作る

        $this->assertTrue($guu->isStrongerThan($choki));
    }
    public function test_強いか判定_ぐーはパーより強いは「誤り」()
    {
        $guu = Hand::getHand(0); // ぐーを作る
        $paa = Hand::getHand(2); // パーを作る

        $this->assertFalse($guu->isStrongerThan($paa));
    }
    public function test_弱いか判定_ぐーはパーより弱いは「正しい」()
    {
        $guu = Hand::getHand(0); // ぐーを作る
        $paa = Hand::getHand(2); // パーを作る

        $this->assertTrue($guu->isWeakerThan($paa));
    }
    public function test_弱いか判定_ぐーはチョキより弱いは「誤り」()
    {
        $guu = Hand::getHand(0); // ぐーを作る
        $choki = Hand::getHand(1); // チョキを作る

        $this->assertFalse($guu->isWeakerThan($choki));
    }
}
