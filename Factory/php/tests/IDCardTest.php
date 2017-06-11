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
        ob_start();
        $card = new \idcard\IDCard('山田一郎');
        $actual = ob_get_clean();
        $expected = '山田一郎のカードを作ります。'."\n";
        $this->assertEquals($expected, $actual);

        return $card;
    }
    /**
     * @depends testConstruct
     */
    public function testUse($card)
    {
        ob_start();
        $card->use();
        $actual = ob_get_clean();
        $expected = '山田一郎のカードを使います。'."\n";
        $this->assertEquals($expected, $actual);
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
