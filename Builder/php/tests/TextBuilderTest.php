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

    public function testMakeItems()
    {
        $items = [];
        $items[] = 'おはようございます';
        $items[] = 'いつもお世話になっております';

        $textbuilder = new TextBuilder();
        $textbuilder->makeItems($items);

        $expected = '　・おはようございます'."\n";
        $expected .= '　・いつもお世話になっております'."\n";
        $expected .= "\n";
        
        $this->assertEquals($textbuilder->getResult(), $expected);
    }

    public function testClose()
    {
        $textbuilder = new TextBuilder();
        $textbuilder->close();

        $expected = '=============================='."\n";
        
        $this->assertEquals($textbuilder->getResult(), $expected);
    }
}
