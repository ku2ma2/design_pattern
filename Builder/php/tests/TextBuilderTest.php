<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/TextBuilder.php';

/**
 * TextBuilder Test
 */
final class TextBuilderTest extends TestCase
{
    public function testMakeTitle()
    {
        $textbuilder = new TextBuilder();
        $textbuilder->makeTitle('Greeting');

        $expected = '=============================='."\n";
        $expected .= '『Greeting』'."\n";
        $expected .= "\n";
        
        $this->assertEquals($textbuilder->getResult(), $expected);
        return $textbuilder;
    }

    public function testMakeString()
    {
        $textbuilder = new TextBuilder();
        $textbuilder->makeString('お昼にかけて');

        $expected = '■お昼にかけて'."\n";
        $expected .= "\n";
        
        $this->assertEquals($textbuilder->getResult(), $expected);
    }
}
