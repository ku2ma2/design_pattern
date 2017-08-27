<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/Memento.php';


/**
 * Memento Memento Test
 */
final class MementoMementoTest extends TestCase
{
    public function test_getMoney_設定された所持金を得る()
    {
        $expected = 3256;

        $memento = new \Memento\Memento(3256);
        $actual = $memento->getMoney();

        $this->assertEquals($actual, $expected);
    }
    public function test_getFruit_設定されたフルーツを得る()
    {
        $expected = ['りんご','パイナップル'];

        $memento = new \Memento\Memento(3256);
        $memento->addFruit('りんご');
        $memento->addFruit('パイナップル');
        $actual = $memento->getFruits();

        $this->assertEquals($actual, $expected);
    }
}
