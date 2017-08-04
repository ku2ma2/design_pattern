<?php

use PHPUnit\Framework\TestCase;
use \ChainOfResponsibility as COR;

require_once dirname(__DIR__) . '/LimitSupport.php';


/**
 * COR LimitSupport Test
 */
final class CORLimitSupportTest extends TestCase
{
    public function test_resolve_初期設定5でTrouble番号が5未満ならTRUE()
    {
        $trouble = new COR\Trouble(3);

        $stub = new COR\LimitSupport('NoSupport', 5);

        // テストメソッドも protectedなので アクセスできるようにする。
        $reflection_class = new \ReflectionClass($stub);
        $method = $reflection_class->getMethod('resolve'); // メソッドの指定
        $method->setAccessible(true);
        $actual = $method->invoke($stub, $trouble); // メソッドの実行

        $this->assertTrue($actual);

        return $stub;
    }
    /**
     * @depends test_resolve_初期設定5でTrouble番号が5未満ならTRUE
     */
    public function test_resolve_初期設定5でTrouble番号が5以上ならFALSE($stub)
    {
        $trouble = new COR\Trouble(13); // 今度は 5以上の 13を入れる

        // テストメソッドも protectedなので アクセスできるようにする。
        $reflection_class = new \ReflectionClass($stub);
        $method = $reflection_class->getMethod('resolve'); // メソッドの指定
        $method->setAccessible(true);
        $actual = $method->invoke($stub, $trouble); // メソッドの実行

        $this->assertFalse($actual);
    }
}
