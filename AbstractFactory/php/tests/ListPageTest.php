<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/listfactory/ListPage.php';
require_once dirname(__DIR__) . '/listfactory/ListLink.php';
require_once dirname(__DIR__) . '/listfactory/ListTray.php';

/**
 * AbstractFactory ListPage Test
 */
final class AbstractFactoryListPageTest extends TestCase
{
    public function test_与えられたタイトルと所有者でHTMLを生成する()
    {
        $expected = '';
        $expected .= '<html><head><title>タイトル</title></head>'."\n";
        $expected .= '<body>'."\n";
        $expected .= '<h1>タイトル</h1>'."\n";
        $expected .= '<ul>'."\n";
        $expected .= '</ul>'."\n";
        $expected .= '<hr><address>所有者</address>'."\n";
        $expected .= '</body></html>'."\n";

        $page = new \listfactory\ListPage($title = 'タイトル', $author = '所有者');

        $this->assertEquals($expected, $page->makeHTML());
    }
    public function test_途中にItemを追加するとリスト内にそれを出力する()
    {
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

        $page = new \listfactory\ListPage($title = 'タイトル', $author = '所有者');
        
        $link1 = new \listfactory\ListLink($caption = 'タイトル(1)', $url = 'http://example.com');
        $link2 = new \listfactory\ListLink($caption = 'タイトル(2)', $url = 'https://example.com');
        $page->add($link1);
        $page->add($link2);

        $this->assertEquals($expected, $page->makeHTML());

        return $page;
    }

    /**
     * @depends test_途中にItemを追加するとリスト内にそれを出力する
     */
    public function test_トレイでまとめられたものもHTMLに展開される($page)
    {
        $expected = '';
        $expected .= '<html><head><title>タイトル</title></head>'."\n";
        $expected .= '<body>'."\n";
        $expected .= '<h1>タイトル</h1>'."\n";
        $expected .= '<ul>'."\n";
        $expected .= '<li><a href="http://example.com">タイトル(1)</a></li>'."\n";
        $expected .= '<li><a href="https://example.com">タイトル(2)</a></li>'."\n";
        $expected .= '<li>' . "\n";
        $expected .= '新聞' ."\n";
        $expected .= '<ul>' . "\n";
        $expected .= '<li><a href="http://www.asahi.com">朝日新聞</a></li>' . "\n";
        $expected .= '<li><a href="http://www.yomiuri.co.jp">読売新聞</a></li>' . "\n";
        $expected .= '</ul>' . "\n";
        $expected .= '</li>' . "\n";
        $expected .= '</ul>'."\n";
        $expected .= '<hr><address>所有者</address>'."\n";
        $expected .= '</body></html>'."\n";

        $asahi = new \listfactory\ListLink("朝日新聞", "http://www.asahi.com");
        $yomiuri = new \listfactory\ListLink("読売新聞", "http://www.yomiuri.co.jp");
        $traynews = new \listfactory\ListTray("新聞");
        $traynews->add($asahi);
        $traynews->add($yomiuri);

        $page->add($traynews);

        $this->assertEquals($expected, $page->makeHTML());

        return $page;
    }
}
