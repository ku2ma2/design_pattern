<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/IDCard.php';

/**
 * FactoryMethod IDCard Test
 */
final class FactoryMethodIDCardTest extends TestCase
{
    public function testConstruct()
    {
        $expected = '山田一郎のカードを作ります。'."\n";

        $card = new \idcard\IDCard('山田一郎');
        $this->expectOutputString($expected);

        return $card;
    }
    /**
     * @depends testConstruct
     */
    public function testUse($card)
    {
        $expected = '山田一郎のカードを使います。'."\n";

        $card->use();
        $this->expectOutputString($expected);
    }
    /**
     * @depends testConstruct
     */
    public function testGetOwner($card)
    {
        $expected = '山田一郎';
        $this->assertEquals($expected, $card->getOwner());
    }
}
