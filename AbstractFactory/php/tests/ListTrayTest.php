<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/listfactory/ListTray.php';
require_once dirname(__DIR__) . '/listfactory/ListLink.php';

/**
 * ListTray Test
 */
final class ListTrayTest extends TestCase
{
    public function test_ListTrayはキャプションを与えられるとHTMLを生成する()
    {
        $tray = new \listfactory\ListTray($caption = 'キャプション');

        $expected = '';
        $expected .= '<li>'."\n";
        $expected .= 'キャプション'."\n";
        $expected .= '<ul>'."\n";
        // TODO: ここにItemの項目を入れる
        $expected .= '</ul>'."\n";
        $expected .= '</li>'."\n";

        $this->assertEquals($expected, $tray->makeHTML());
    }
    public function test_途中にItemを追加するとリスト内にそれを出力する()
    {
        $tray = new \listfactory\ListTray($caption = 'キャプション');
        $link1 = new \listfactory\ListLink($caption = 'タイトル(1)', $url = 'http://example.com');
        $link2 = new \listfactory\ListLink($caption = 'タイトル(2)', $url = 'https://example.com');
        $tray->add($link1);
        $tray->add($link2);

        $expected = '';
        $expected .= '<li>'."\n";
        $expected .= 'キャプション'."\n";
        $expected .= '<ul>'."\n";
        $expected .= '<li><a href="http://example.com">タイトル(1)</a></li>'."\n";
        $expected .= '<li><a href="https://example.com">タイトル(2)</a></li>'."\n";
        $expected .= '</ul>'."\n";
        $expected .= '</li>'."\n";

        $this->assertEquals($expected, $tray->makeHTML());
    }
}
