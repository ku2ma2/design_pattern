<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/CharDisplay.php';

/**
 * CharDisplay Test
 */
final class CharDisplayTest extends TestCase
{
    public function testDisplay()
    {
        $d1 = new CharDisplay('H');
        ob_start();
        $d1->display();
        $actual = ob_get_clean();
        $expected = '<<HHHHH>>'."\n";
        $this->assertEquals($expected, $actual);
    }
}
