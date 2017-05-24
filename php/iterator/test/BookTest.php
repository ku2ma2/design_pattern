<?php

use PHPUnit\Framework\TestCase;

require dirname(__DIR__) . '/Book.php';

/**
 * @covers Email
 */
final class BookTest extends TestCase
{
    public function testPHPUnitTest()
    {
        $this->assertEquals( 0, false);
    }
}
