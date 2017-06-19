<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/TextBuilder.php';

/**
 * TextBuilder Test
 */
final class TextBuilderTest extends TestCase
{
    public function testGetResult()
    {
        $textbuilder = new TextBuilder();
        $textbuilder->makeTitle('Greeting');

        $expected = '=============================='."\n";
        $expected .= '『Greeting』'."\n";
        $expected .= "\n";
        
        $this->assertEquals($textbuilder->getResult(), $expected);
    }
}
