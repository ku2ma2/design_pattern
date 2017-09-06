<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/BigChar.php';

/**
 * Flyweight BigChar Test
 */
final class FlyweightBigCharTest extends TestCase
{
    /**
     * @expectedException RuntimeException
     */
    public function test_construct_想定していない数値が入っていた場合はRuntimeException例外()
    {
        $char = new \Flyweight\BigChar(10);
    }

    public function test_construct_大きな数字ファイルを出力する()
    {
        $expected  = "......##........\n";
        $expected .= "..######........\n";
        $expected .= "......##........\n";
        $expected .= "......##........\n";
        $expected .= "......##........\n";
        $expected .= "......##........\n";
        $expected .= "..#########.....\n";
        $expected .= "................\n";
         
        $char = new \Flyweight\BigChar(1);
        $char->print();
 
        $this->expectOutputString($expected);
    }
}
