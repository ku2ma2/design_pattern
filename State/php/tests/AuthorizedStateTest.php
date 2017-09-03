<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/AuthorizedState.php';

/**
 * State AuthorizedStateTest
 */
final class StateAuthorizedStateTest extends TestCase
{
    public function test_getInstance_インスタンスを作成すると全て同じものになる()
    {
        $obj1 = \State\AuthorizedState::getInstance();
        $obj2 = \State\AuthorizedState::getInstance();

        $this->assertSame($obj1, $obj2);
    }
}
