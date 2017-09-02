<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/NightState.php';

/**
 * State NightStateTest
 */
final class StateNightStateTest extends TestCase
{
    public function test_getInstance_インスタンスを作成すると全て同じものになる()
    {
        $obj1 = \State\NightState::getInstance();
        $obj2 = \State\NightState::getInstance();

        $this->assertSame($obj1, $obj2);
    }
}
