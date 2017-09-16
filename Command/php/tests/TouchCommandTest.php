<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/TouchCommand.php';
/**
 * Command TouchCommand Test
 */
final class CommandTouchCommandTest extends TestCase
{
    public function test_execute_コマンドを使う()
    {
        $expected = "Touchを作成しました\n";

        $file = new \Command\File('Touch');
        $touch = new \Command\TouchCommand($file);
        $actual = $touch->execute();

        $this->assertEquals($expected, $actual);
    }
}
