<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/HTMLBuilder.php';

/**
 * HTMLBuilder Test
 */
final class HTMLBuilderTest extends TestCase
{
    public function testMakeTitleCheckfilename()
    {
        $builder = new HTMLBuilder();
        $builder->makeTitle('Greeting');

        $expected = 'Greeting.html';
        
        $this->assertEquals($builder->getResult(), $expected);
    }

    public function testMakeTitle()
    {
        $builder = new HTMLBuilder();
        $builder->makeTitle('Greeting');

        $expected = '<html><head><title>Greeting</title></head><body>'."\n";
        $expected .= '<h1>Greeting</h1>'."\n";
        
        $this->assertEquals($builder->getBuffer(), $expected);
        return $builder;
    }

    public function testMakeString()
    {
        $builder = new HTMLBuilder();
        $builder->makeString('お昼にかけて');

        $expected = '<p>お昼にかけて</p>'."\n";
        
        $this->assertEquals($builder->getBuffer(), $expected);
    }

    public function testMakeItems()
    {
        $items = [];
        $items[] = 'おはようございます';
        $items[] = 'いつもお世話になっております';

        $builder = new HTMLBuilder();
        $builder->makeItems($items);

        $expected = "<ul>\n";
        $expected .= "<li>おはようございます</li>\n";
        $expected .= "<li>いつもお世話になっております</li>\n";
        $expected .= "</ul>\n";
        
        $this->assertEquals($builder->getBuffer(), $expected);
    }

    /**
     * @depends testMakeTitle
     */
    public function testClose($builder)
    {
        $builder->close();

        $expected = '<html><head><title>Greeting</title></head><body>'."\n";
        $expected .= '<h1>Greeting</h1>'."\n";
        $expected .= "</body></html>\n";
        $this->expectOutputString($expected);
    }
}
