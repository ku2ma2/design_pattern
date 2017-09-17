<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/CopyCommand.php';
/**
 * Command CopyCommand Test
 */
final class CommandCopyCommandTest extends TestCase
{
    public function test_execute_圧縮コマンドを使う()
    {
        $expected = "copy_of_ファイルを作成しました\n";

        $file = new \Command\File('ファイル');
        $copy = new \Command\CopyCommand($file);
        $actual = $copy->execute();

        $this->expectOutputString($expected);
    }
}
