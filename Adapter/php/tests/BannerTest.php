<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Banner.php';

/**
 * Banner Test
 */
final class BannerTest extends TestCase
{
    public function testShowWithParen()
    {
        $banner = new Banner("Banner");
        $this->assertEquals($banner->showWithParen(), "(Banner)");
    }
    public function testShowWithAster()
    {
        $banner = new Banner("Banner");
        $this->assertEquals($banner->showWithAster(), "*Banner*");
    }
}
