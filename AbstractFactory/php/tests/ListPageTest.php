<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/listfactory/ListPage.php';
require_once dirname(__DIR__) . '/listfactory/ListLink.php';

/**
 * ListPage Test
 */
final class ListPageTest extends TestCase
{
    public function test_与えられたタイトルと所有者でHTMLを生成する()
    {
        $page = new \listfactory\ListPage($title = 'タイトル', $author = '所有者');
        $expected = '';
        $expected .= '<html><head><title>タイトル</title></head>'."\n";
        $expected .= '<body>'."\n";
        $expected .= '<h1>タイトル</h1>'."\n";
        $expected .= '<ul>'."\n";
        $expected .= '</ul>'."\n";
        $expected .= '<hr><address>所有者</address>'."\n";
        $expected .= '</body></html>'."\n";

        $this->assertEquals($expected, $page->makeHTML());
    }
    public function test_途中にItemを追加するとリスト内にそれを出力する()
    {
        $page = new \listfactory\ListPage($title = 'タイトル', $author = '所有者');
        
        $link1 = new \listfactory\ListLink($caption = 'タイトル(1)', $url = 'http://example.com');
        $link2 = new \listfactory\ListLink($caption = 'タイトル(2)', $url = 'https://example.com');
        $page->add($link1);
        $page->add($link2);

        $expected = '';
        $expected .= '<html><head><title>タイトル</title></head>'."\n";
        $expected .= '<body>'."\n";
        $expected .= '<h1>タイトル</h1>'."\n";
        $expected .= '<ul>'."\n";
        $expected .= '<li><a href="http://example.com">タイトル(1)</a></li>'."\n";
        $expected .= '<li><a href="https://example.com">タイトル(2)</a></li>'."\n";
        $expected .= '</ul>'."\n";
        $expected .= '<hr><address>所有者</address>'."\n";
        $expected .= '</body></html>'."\n";

        $this->assertEquals($expected, $page->makeHTML());
    }
}
