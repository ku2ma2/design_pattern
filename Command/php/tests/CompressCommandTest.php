<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/CompressCommand.php';
/**
 * Command CompressCommand Test
 */
final class CommandCompressCommandTest extends TestCase
{
    public function test_execute_圧縮コマンドを使う()
    {
        $expected = "Compressを圧縮しました\n";

        $file = new \Command\File('Compress');
        $compress = new \Command\CompressCommand($file);
        $actual = $compress->execute();

        $this->assertEquals($expected, $actual);
    }
}
