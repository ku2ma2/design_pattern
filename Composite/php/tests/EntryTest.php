<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Entry.php';

/**
 * Entry Test
 */
final class EntryTest extends TestCase
{
    public function test_toString_与えられたファイル名とサイズを返す()
    {
        $stub = $this->getMockForAbstractClass(Entry::class);

        $stub->expects($this->any()) // 呼び出し回数指定(anyはいつでも)
             ->method('getName') // メソッドの指定
             ->will($this->returnValue('/path/to/example.txt')); // メソッドが返すであろう値

        $stub->expects($this->any())
             ->method('getSize')
             ->will($this->returnValue(1000));

        $expected = '/path/to/example.txt (1000)';

        $this->assertEquals($stub->toString(), $expected);
    }
}
