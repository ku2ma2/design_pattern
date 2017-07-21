<?php

use PHPUnit\Framework\TestCase as TestCase;

require_once dirname(__DIR__) . '/IDCardFactory.php';

/**
 * FactoryMethod IDCardFactory Test
 */
final class FactoryMethodIDCardFactoryTest extends TestCase
{
    public function testCreate()
    {
        $expected = '山田一郎のカードを作ります。'."\n";

        $idcard = new \idcard\IDCardFactory;
        $card = $idcard->create('山田一郎');

        $this->expectOutputString($expected);

        return $card;
    }
    /**
     * @depends testCreate
     */
    public function testUse($card)
    {
        $expected = '山田一郎のカードを使います。'."\n";

        $card->use();
        $this->expectOutputString($expected);
    }
}
