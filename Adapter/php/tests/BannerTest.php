<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Banner.php';

/**
 * Adapter Banner Test
 */
final class AdapterBannerTest extends TestCase
{
    public function test_ShowWithParen_カッコをつけて返す()
    {
        $expected = "(Banner)";
        $banner = new Banner("Banner");
        $actual = $banner->showWithParen();
        $this->assertEquals($expected, $actual);
    }
    public function test_ShowWithAster_アスタリスクをつけて返す()
    {
        $expected = "*Banner*";
        $banner = new Banner("Banner");
        $actual = $banner->showWithAster();
        $this->assertEquals($expected, $actual);
    }
}
