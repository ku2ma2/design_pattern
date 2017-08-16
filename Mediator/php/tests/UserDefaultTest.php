<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/UserDefault.php';


/**
 * Mediator UserDeafult Test
 */
final class MediatorUserDeafultTest extends TestCase
{
    public function test_getName_クラス変数に設定された値をそのまま返す()
    {
        $expected = "Tajima";

        $user = new \Mediator\UserDefault('Tajima');
        $actual = $user->getName();

        $this->assertEquals($expected, $actual);
    }

    public function test_receiveMessage_名前とメッセージを受け取り表示()
    {
        $expected = "Tajimaさん => Sasakiさん: こんにちは！\n";

        $user = new \Mediator\UserDefault('Sasaki');
        $user->receiveMessage('Tajima', 'こんにちは！');

        $this->expectOutputString($expected);
    }
}
