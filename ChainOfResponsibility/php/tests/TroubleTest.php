<?php

use PHPUnit\Framework\TestCase;
use \ChainOfResponsiblity as COR;

require_once dirname(__DIR__) . '/Trouble.php';


/**
 * COR Trouble Test
 */
final class CORTroubleTest extends TestCase
{
    public function test_getName_設定されたトラブル番号を取得する()
    {
        $expected = 1000;

        $trouble = new COR\Trouble(1000);
        $actual = $trouble->getNumber();

        $this->assertEquals($expected, $actual);
    }
    public function test_toString_オブジェクト自体を取得するとフォーマット化された文字列を取得する()
    {
        $expected = '[Trouble 1000]';

        $trouble = new COR\Trouble(1000);
        echo $trouble;

        $this->expectOutputString($expected);
    }
}
