<?php

use PHPUnit\Framework\TestCase;
use \ChainOfResponsibility as COR;

require_once dirname(__DIR__) . '/SpecialSupport.php';


/**
 * COR SpecialSupport Test
 */
final class CORSpecialSupportTest extends TestCase
{
    public function test_resolve_設定された特定の番号ならTRUEを返す()
    {
        $trouble = new COR\Trouble(3);
        $stub = new COR\SpecialSupport('SpecialSuppot', 3);

        // テストメソッドも protectedなので アクセスできるようにする。
        $reflection_class = new \ReflectionClass($stub);
        $method = $reflection_class->getMethod('resolve'); // メソッドの指定
        $method->setAccessible(true);
        $actual = $method->invoke($stub, $trouble); // メソッドの実行

        $this->assertTrue($actual);

        return $stub;
    }
    /**
     * @depends test_resolve_設定された特定の番号ならTRUEを返す
     */
    public function test_resolve_設定されていない番号ならFALSEを返す($stub)
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
