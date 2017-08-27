<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Gamer.php';


/**
 * Memento Gamer Test
 */
final class MementoGamerTest extends TestCase
{
    public function test_getMoney_設定された所持金を得る()
    {
        $expected = 3256;

        $gamer = new \Memento\Gamer(3256);
        $actual = $gamer->getMoney();

        $this->assertEquals($actual, $expected);
    }
    public function test_toString_オブジェクトの文字列表現は所持金とフルーツリストを表示()
    {
        $expected = '[money = 3256, fruits = ]';

        $gamer = new \Memento\Gamer(3256);
        $actual = (string)$gamer;

        $this->assertEquals($actual, $expected);
    }
}
