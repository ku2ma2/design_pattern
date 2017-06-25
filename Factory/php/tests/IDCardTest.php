<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/IDCard.php';

/**
 * IDCard Test
 */
final class IDCardTest extends TestCase
{
    public function testConstruct()
    {
        $card = new \idcard\IDCard('山田一郎');
        $expected = '山田一郎のカードを作ります。'."\n";
        $this->expectOutputString($expected);

        return $card;
    }
    /**
     * @depends testConstruct
     */
    public function testUse($card)
    {
        $card->use();
        $expected = '山田一郎のカードを使います。'."\n";
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
