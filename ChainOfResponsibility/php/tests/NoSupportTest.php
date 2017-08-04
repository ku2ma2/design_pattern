<?php

use PHPUnit\Framework\TestCase;
use \ChainOfResponsibility as COR;

require_once dirname(__DIR__) . '/NoSupport.php';


/**
 * COR NoSupport Test
 */
final class CORNoSupportTest extends TestCase
{
    public function test_resolve_解決メソッドは必ずfalseを返す()
    {
        $expected = false;

        $trouble = new COR\Trouble(1);
        $stub = new COR\NoSupport('NoSupport');

        // テストメソッドも protectedなので アクセスできるようにする。
        $reflection_class = new \ReflectionClass($stub);
        $method = $reflection_class->getMethod('resolve'); // メソッドの指定
        $method->setAccessible(true);
        $actual = $method->invoke($stub, $trouble); // メソッドの実行

        $this->assertEquals($expected, $actual);
    }
}
