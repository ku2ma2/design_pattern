<?php

use PHPUnit\Framework\TestCase;
use \ChainOfResponsiblity as COR;

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

        // abstract class なのでまずMockを作る
        $stub = $this->getMockForAbstractClass(COR\NoSupport::class, array('NoSupport'));

        // テストメソッドも protectedなので アクセスできるようにする。
        $reflection_class = new \ReflectionClass($stub);
        $method = $reflection_class->getMethod('resolve'); // メソッドの指定
        $method->setAccessible(true);
        $actual = $method->invoke($stub, $trouble); // メソッドの実行

        $this->assertEquals($expected, $actual);
    }
}
