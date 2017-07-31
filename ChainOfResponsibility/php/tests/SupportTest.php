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
}
