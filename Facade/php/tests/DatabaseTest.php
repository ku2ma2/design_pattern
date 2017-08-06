<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Database.php';

/**
 * Facade Database Test
 */
final class FacadeDatabaseTest extends TestCase
{
    public function test_load_ファイル名を指定すると内容をイコールで分割して返す()
    {
        $expected = 'Hiroshi Yuki';
        $disp = new \Decorator\StringDisplay("Hello, World.");
        $fullborder = new \Decorator\FullBorder($disp);
        $actual = $fullborder->getColumns();

        $this->assertEquals($expected, $actual);

        return $fullborder;
    }
}
