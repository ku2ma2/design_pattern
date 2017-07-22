<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/TextBuilder.php';

/**
 * Builder TextBuilder Test
 */
final class BuilderTextBuilderTest extends TestCase
{
    public function test_makeTitle_文字列を入れると飾り文字を入れて出力()
    {
        $expected = '=============================='."\n";
        $expected .= '『Greeting』'."\n";
        $expected .= "\n";

        $textbuilder = new TextBuilder();
        $textbuilder->makeTitle('Greeting');

        $this->assertEquals($expected, $textbuilder->getResult());
        return $textbuilder;
    }

    public function testMakeString()
    {
        $expected = '■お昼にかけて'."\n";
        $expected .= "\n";

        $textbuilder = new TextBuilder();
        $textbuilder->makeString('お昼にかけて');
        
        $this->assertEquals($expected, $textbuilder->getResult());
    }

    public function testMakeItems()
    {
        $expected = '　・おはようございます'."\n";
        $expected .= '　・いつもお世話になっております'."\n";
        $expected .= "\n";

        $items = [];
        $items[] = 'おはようございます';
        $items[] = 'いつもお世話になっております';

        $textbuilder = new TextBuilder();
        $textbuilder->makeItems($items);
        
        $this->assertEquals($expected, $textbuilder->getResult());
    }

    public function testClose()
    {
        $expected = '=============================='."\n";

        $textbuilder = new TextBuilder();
        $textbuilder->close();
        
        $this->assertEquals($expected, $textbuilder->getResult());
    }
}
