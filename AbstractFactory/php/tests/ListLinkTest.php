<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/listfactory/ListLink.php';

/**
 * AbstractFactory ListLink Test
 */
final class AbstractFactoryListLinkTest extends TestCase
{
    public function test_makeHTMLでフォーマット化されたHTMLを返す()
    {
        $expected = '';
        $expected .= '<li>';
        $expected .= '<a href="http://example.com">キャプション</a>';
        $expected .= '</li>'."\n";

        $link = new \listfactory\ListLink($caption = 'キャプション', $url = 'http://example.com');

        $this->assertEquals($expected, $link->makeHTML());
    }
}
