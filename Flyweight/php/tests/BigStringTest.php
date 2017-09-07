<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/BigString.php';

/**
 * Flyweight BigString Test
 */
final class FlyweightBigStringTest extends TestCase
{
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

        $expected .= "....######......\n";
        $expected .= "..##......##....\n";
        $expected .= "..........##....\n";
        $expected .= "......####......\n";
        $expected .= "..........##....\n";
        $expected .= "..##......##....\n";
        $expected .= "....######......\n";
        $expected .= "................\n";

        $expected .= "......##........\n";
        $expected .= "..######........\n";
        $expected .= "......##........\n";
        $expected .= "......##........\n";
        $expected .= "......##........\n";
        $expected .= "......##........\n";
        $expected .= "..#########.....\n";
        $expected .= "................\n";
         
        $string = new \Flyweight\BigString(131);
        $string->print();
 
        $this->expectOutputString($expected);
    }
}
