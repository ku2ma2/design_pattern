<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/File.php';
/**
 * Command File Test
 */
final class CommandTestTest extends TestCase
{
    public function test_getName_名前を取得する()
    {
        $expected = '';
        $actual = '';
        $this->assertEquals($expected, $actual);
    }
}
