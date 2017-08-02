<?php

use PHPUnit\Framework\TestCase;
use \ChainOfResponsiblity as COR;

require_once dirname(__DIR__) . '/OddSupport.php';


/**
 * COR OddSupport Test
 */
final class COROddSupportTest extends TestCase
{
    public function test_resolve_Trouble番号が奇数ならTRUE()
    {
        $trouble = new COR\Trouble(3);

        // abstract class なのでまずMockを作る
        $stub = $this->getMockForAbstractClass(COR\OddSupport::class, ['OddSupport']);

        // テストメソッドも protectedなので アクセスできるようにする。
        $reflection_class = new \ReflectionClass($stub);
        $method = $reflection_class->getMethod('resolve'); // メソッドの指定
        $method->setAccessible(true);
        $actual = $method->invoke($stub, $trouble); // メソッドの実行

        $this->assertTrue($actual);

        return $stub;
    }
    /**
     * @depends test_resolve_Trouble番号が奇数ならTRUE
     */
    public function test_resolve_test_resolve_Trouble番号が偶数ならFALSE($stub)
    {
        $trouble = new COR\Trouble(12); // 今度は偶数を入れる

        // テストメソッドも protectedなので アクセスできるようにする。
        $reflection_class = new \ReflectionClass($stub);
        $method = $reflection_class->getMethod('resolve'); // メソッドの指定
        $method->setAccessible(true);
        $actual = $method->invoke($stub, $trouble); // メソッドの実行

        $this->assertFalse($actual);
    }
}
