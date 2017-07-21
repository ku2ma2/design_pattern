<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/HTMLBuilder.php';

/**
 * Builder HTMLBuilder Test
 */
final class BuilderHTMLBuilderTest extends TestCase
{
    public function testMakeTitleCheckfilename()
    {
        $expected = 'Greeting.html';

        $builder = new HTMLBuilder();
        $builder->makeTitle('Greeting');

        
        $this->assertEquals($expected, $builder->getResult());
    }

    public function testMakeTitle()
    {
        $expected = '<html><head><title>Greeting</title></head><body>'."\n";
        $expected .= '<h1>Greeting</h1>'."\n";
        
        $builder = new HTMLBuilder();
        $builder->makeTitle('Greeting');

        $this->assertEquals($expected, $builder->getBuffer());
        return $builder;
    }

    public function testMakeString()
    {
        $expected = '<p>お昼にかけて</p>'."\n";

        $builder = new HTMLBuilder();
        $builder->makeString('お昼にかけて');
        
        $this->assertEquals($expected, $builder->getBuffer());
    }

    public function testMakeItems()
    {
        $expected = "<ul>\n";
        $expected .= "<li>おはようございます</li>\n";
        $expected .= "<li>いつもお世話になっております</li>\n";
        $expected .= "</ul>\n";

        $items = [];
        $items[] = 'おはようございます';
        $items[] = 'いつもお世話になっております';

        $builder = new HTMLBuilder();
        $builder->makeItems($items);
        
        $this->assertEquals($expected, $builder->getBuffer());
    }

    /**
     * @depends testMakeTitle
     */
    public function testClose($builder)
    {
        $expected = '<html><head><title>Greeting</title></head><body>'."\n";
        $expected .= '<h1>Greeting</h1>'."\n";
        $expected .= "</body></html>\n";

        $builder->close();

        $this->expectOutputString($expected);
    }
}
