<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/User.php';


/**
 * Mediator User Test
 */
final class MediatorUserTest extends TestCase
{
    public function test_getName_クラス変数に設定された値をそのまま返す()
    {
        $expected = "Tajima";

        $user = new \Mediator\User('Tajima');
        $actual = $user->getName();

        $this->assertEquals($expected, $actual);
    }
    public function test_receiveMessage_名前とメッセージを受け取り表示()
    {
        $expected = "Tajimaさん => Sasakiさん: こんにちは！\n";

        $user = new \Mediator\User('Sasaki');
        $user->receiveMessage('Tajima', 'こんにちは！');

        $this->expectOutputString($expected);
    }
}
