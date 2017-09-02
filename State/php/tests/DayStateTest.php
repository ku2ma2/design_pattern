<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/DayState.php';

/**
 * State DayStateTest
 */
final class StateDayStateTest extends TestCase
{
    public function test_getInstance_インスタンスを作成すると全て同じものになる()
    {
        $obj1 = \State\DayState::getInstance();
        $obj2 = \State\DayState::getInstance();

        $this->assertSame($obj1, $obj2);
    }
}
