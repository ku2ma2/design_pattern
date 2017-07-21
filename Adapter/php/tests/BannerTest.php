<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Banner.php';

/**
 * Adapter Banner Test
 */
final class AdapterBannerTest extends TestCase
{
    public function testShowWithParen()
    {
        $expected = "(Banner)";
        $banner = new Banner("Banner");
        $this->assertEquals($expected, $banner->showWithParen());
    }
    public function testShowWithAster()
    {
        $expected = "*Banner*";
        $banner = new Banner("Banner");
        $this->assertEquals($expected, $banner->showWithAster());
    }
}
