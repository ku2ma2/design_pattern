<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/listfactory/ListLink.php';

/**
 * ListLink Test
 */
final class ListLinkTest extends TestCase
{
    public function testCreate()
    {
        $link = new \listfactory\ListLink($caption = 'キャプション', $url = 'http://example.com');

        $expected = '';
        $expected .= '<li>';
        $expected .= '<a href="http://example.com">キャプション</a>';
        $expected .= '</li>'."\n";

        $this->assertEquals($expected, $link->makeHTML());
    }
}
