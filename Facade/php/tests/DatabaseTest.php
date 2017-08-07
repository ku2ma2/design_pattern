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
        $expected = [
            'hyuki@hyuki.com' => 'Hiroshi Yuki',
            'hanako@hyuki.com' => 'Hanako Sato'
        ];
        
        $actual = \Facade\Database::getProperties('testdata');

        $this->assertEquals($actual, $expected);
    }
}
