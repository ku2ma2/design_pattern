<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/Singleton.php';

/**
 * Singleton Test
 */
final class SingletonTest extends TestCase
{
    public function testGetInstance()
    {
        $obj = Singleton::getInstance();

        $expected = 'インスタンスを生成しました。'."\n";
        $this->expectOutputString($expected);

        return $obj;
    }

    public function testAssertObj()
    {
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();

        $this->assertSame($obj1, $obj2);
    }
}
