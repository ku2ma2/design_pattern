<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/Singleton.php';

/**
 * Singleton SingletonTest
 */
final class SingletonSingletonTest extends TestCase
{
    public function testGetInstance()
    {
        $expected = 'インスタンスを生成しました。'."\n";

        $obj = Singleton::getInstance();

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
