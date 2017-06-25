<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/IDCardFactory.php';

/**
 * IDCardFactory Test
 */
final class IDCardFactoryTest extends TestCase
{
    public function testCreate()
    {
        $idcard = new \idcard\IDCardFactory;

        $card = $idcard->create('山田一郎');
        $expected = '山田一郎のカードを作ります。'."\n";
        $this->expectOutputString($expected);

        return $card;
    }
    /**
     * @depends testCreate
     */
    public function testUse($card)
    {
        $card->use();
        $expected = '山田一郎のカードを使います。'."\n";
        $this->expectOutputString($expected);
    }
}
