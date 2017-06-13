<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/Sigleton.php';

/**
 * Sigleton Test
 */
final class SigletonTest extends TestCase
{
    public function testGetInstance()
    {
        ob_start();
        $obj = Singleton::getInstance();
        $actual = ob_get_clean();
        $expected = 'インスタンスを生成しました。'."\n";
        $this->assertEquals($expected, $actual);
        return $obj;
    }

    public function testAssertObj()
    {
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();

        $this->assertSame($obj1, $obj2);
    }
}
