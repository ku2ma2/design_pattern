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


        ob_start();
        $card = $idcard->create('山田一郎');
        $actual = ob_get_clean();
        $expected = '山田一郎のカードを作ります。'."\n";
        $this->assertEquals($expected, $actual);

        return $card;
    }
    /**
     * @depends testCreate
     */
    public function testUse($card)
    {
        ob_start();
        $card->use();
        $actual = ob_get_clean();
        $expected = '山田一郎のカードを使います。'."\n";
        $this->assertEquals($expected, $actual);
    }
}
