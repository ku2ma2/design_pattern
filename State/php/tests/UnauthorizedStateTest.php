<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/UnauthorizedState.php';

/**
 * State UnauthorizedStateTest
 */
final class StateUnauthorizedStateTest extends TestCase
{
    public function test_getInstance_インスタンスを作成すると全て同じものになる()
    {
        $obj1 = \State\UnauthorizedState::getInstance();
        $obj2 = \State\UnauthorizedState::getInstance();

        $this->assertSame($obj1, $obj2);
    }
}
