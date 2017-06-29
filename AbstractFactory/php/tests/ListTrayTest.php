<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/listfactory/ListTray.php';

/**
 * ListTray Test
 */
final class ListTrayTest extends TestCase
{
    public function testCreate()
    {
        $page = new \listfactory\ListTray($title = 'タイトル', $author = '所有者');
        $expected = '';
        $expected .= '<html><head><title>タイトル</title></head>'."\n";
        $expected .= '<body>'."\n";
        $expected .= '<h1>タイトル</h1>'."\n";
        $expected .= '<ul>'."\n";
        // TODO: ここにItemの項目を入れる
        $expected .= '</ul>'."\n";
        $expected .= '<hr><address>所有者</address>'."\n";
        $expected .= '</body></html>'."\n";

        $this->assertEquals($expected, $page->makeHTML());
    }
}
