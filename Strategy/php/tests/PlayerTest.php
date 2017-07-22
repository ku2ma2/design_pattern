<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Player.php';
require_once dirname(__DIR__) . '/WinningStrategy.php';
require_once dirname(__DIR__) . '/ProbStrategy.php';

/**
 * Strategy Player Test
 */
final class StrategyPlayerTest extends TestCase
{
    public function test_WinningStrategy_勝った場合は勝ち数が1つ増える()
    {
        $expected = "[Taro:1 games, 1 win, 0 lose]";

        $player = new Player("Taro", new WinningStrategy());
        $hand = $player->nextHand();
        $player->win();

        $actual = $player->toString();

        $this->assertEquals($expected, $actual);
        return $player;
    }
    /**
     * @depends test_WinningStrategy_勝った場合は勝ち数が1つ増える
     */
    public function test_WinningStrategy_負けた場合は負けが1つ増える($player)
    {
        $expected = "[Taro:2 games, 1 win, 1 lose]";

        $hand = $player->nextHand();
        $player->lose();

        $actual = $player->toString();

        $this->assertEquals($expected, $actual);
    }
}
