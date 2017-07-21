<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/CharDisplay.php';

/**
 * TemplateMethod CharDisplay Test
 */
final class TemplateMethodCharDisplayTest extends TestCase
{
    public function testDisplay()
    {
        $expected = '<<HHHHH>>'."\n";

        $d1 = new CharDisplay('H');
        ob_start();
        $d1->display();
        $actual = ob_get_clean();

        $this->assertEquals($expected, $actual);
    }
}
