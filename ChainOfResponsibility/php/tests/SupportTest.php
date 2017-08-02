<?php

use PHPUnit\Framework\TestCase;
use \ChainOfResponsiblity as COR;

require_once dirname(__DIR__) . '/Support.php';


/**
 * COR Support Test
 */
final class CORSupportTest extends TestCase
{
    public function test_toString_インスタンスを出力するとその文字列表現になる()
    {
        $expected = '[Support]';

        $stub = $this->getMockForAbstractClass(COR\Support::class, array('Support'));
        echo $stub;

        $this->expectOutputString($expected);
    }
    public function test_done_解決をしたらその旨を文字列にして返す()
    {
        $expected = "[Trouble 1] is resolved by [Support].\n";

        $trouble = new COR\Trouble(1);

        // abstract class なのでまずMockを作る
        $stub = $this->getMockForAbstractClass(COR\Support::class, array('Support'));

        // テストメソッドも protectedなので アクセスできるようにする。
        $reflection_class = new \ReflectionClass($stub);
        $method = $reflection_class->getMethod('done');
        $method->setAccessible(true);
        $method->invoke($stub, $trouble);

        $this->expectOutputString($expected);
    }
}
