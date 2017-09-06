<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/BigCharFactory.php';

/**
 * Flyweight BigCharFactory Test
 */
final class FlyweightBigCharFactoryTest extends TestCase
{
    public function test_getInstance_インスタンスを作成すると全て同じものになる()
    {
        $obj1 = \Flyweight\BigCharFactory::getInstance();
        $obj2 = \Flyweight\BigCharFactory::getInstance();

        $this->assertSame($obj1, $obj2);
    }
}
