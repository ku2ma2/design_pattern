<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Hand.php';

/**
 * Hand Test
 */
final class HandTest extends TestCase
{
    public function test_同じグーで生成されたインスタンスは同じものである()
    {
        $guu1 = Hand::getHand(0); // グーを作る
        $guu2 = Hand::getHand(0); // グーを作る

        $this->assertSame($guu1, $guu2);
    }
    public function test_違う手役で生成されたインスタンスは違うものである()
    {
        $choki = Hand::getHand(1); // チョキを作る
        $paa = Hand::getHand(2); // パーを作る

        $this->assertNotSame($choki, $paa);
    }
    public function test_強いか判定_グーはチョキより強いは「正しい」()
    {
        $guu = Hand::getHand(0); // グーを作る
        $choki = Hand::getHand(1); // チョキを作る

        $this->assertTrue($guu->isStrongerThan($choki));
    }
    public function test_強いか判定_グーはパーより強いは「誤り」()
    {
        $guu = Hand::getHand(0); // グーを作る
        $paa = Hand::getHand(2); // パーを作る

        $this->assertFalse($guu->isStrongerThan($paa));
    }
    public function test_弱いか判定_グーはパーより弱いは「正しい」()
    {
        $guu = Hand::getHand(0); // グーを作る
        $paa = Hand::getHand(2); // パーを作る

        $this->assertTrue($guu->isWeakerThan($paa));
    }
    public function test_弱いか判定_グーはチョキより弱いは「誤り」()
    {
        $guu = Hand::getHand(0); // グーを作る
        $choki = Hand::getHand(1); // チョキを作る

        $this->assertFalse($guu->isWeakerThan($choki));
    }
    public function test_文字列変換_0を与えるとグーと返ってくる()
    {
        $guu = Hand::getHand(0); // グーを作る

        $this->assertEquals('グー', $guu->toString());
    }
    public function test_文字列変換_1を与えるとチョキと返ってくる()
    {
        $choki = Hand::getHand(1); // チョキを作る

        $this->assertEquals('チョキ', $choki->toString());
    }
}
