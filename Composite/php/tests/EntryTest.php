<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Entry.php';

/**
 * Composite Entry Test
 */
final class CompositeEntryTest extends TestCase
{
    public function test_toString_与えられたファイル名とサイズを返す()
    {
        $expected = '/path/to/example.txt (1000)';

        $stub = $this->getMockForAbstractClass(Entry::class);

        $stub->expects($this->any()) // 呼び出し回数指定(anyはいつでも)
             ->method('getName') // メソッドの指定
             ->will($this->returnValue('/path/to/example.txt')); // メソッドが返すであろう値

        $stub->expects($this->any())
             ->method('getSize')
             ->will($this->returnValue(1000));

        $this->assertEquals($expected, $stub->toString());
    }
}
