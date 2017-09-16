<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Queue.php';
/**
 * Command Queue Test
 */
final class CommandQueueTest extends TestCase
{
    public function test_run_設定したコマンドを実行する()
    {
        $expected = "copy_of_ファイルを作成しました\n";

        $stub = $this->createMock(\Command\Command::class, ['ファイル']); // スタブの作成
        $stub->method('execute')
              ->willReturn('foo'); // スタブの設定

        $queue = new \Command\Queue();
        $queue->addCommand($stub);
        $actual = $queue->run();

        $this->assertEquals($expected, $actual);
    }
}
