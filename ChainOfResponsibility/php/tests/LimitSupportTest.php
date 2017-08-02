<?php

use PHPUnit\Framework\TestCase;
use \ChainOfResponsiblity as COR;

require_once dirname(__DIR__) . '/LimitSupport.php';


/**
 * COR LimitSupport Test
 */
final class CORLimitSupportTest extends TestCase
{
    public function test_resolve_解決メソッドは設定した番号以下なら解決する()
    {
        $expected = true;

        $trouble = new COR\Trouble(3);

        // abstract class なのでまずMockを作る
        $stub = $this->getMockForAbstractClass(COR\LimitSupport::class, ['NoSupport', 5]);

        // テストメソッドも protectedなので アクセスできるようにする。
        $reflection_class = new \ReflectionClass($stub);
        $method = $reflection_class->getMethod('resolve'); // メソッドの指定
        $method->setAccessible(true);
        $actual = $method->invoke($stub, $trouble); // メソッドの実行

        $this->assertEquals($expected, $actual);
    }
}
