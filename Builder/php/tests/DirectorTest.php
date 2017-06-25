<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/TextBuilder.php';
require_once dirname(__DIR__) . '/Director.php';

/**
 * Director Test
 */
final class DirectorTest extends TestCase
{
    public function testCunstruct()
    {
        $textbuilder = new TextBuilder();
        $director = new Director($textbuilder);
        $director->construct();
        $result = $textbuilder->getResult();

        $expected = <<<EOT
==============================
『Greeting』

■朝から昼にかけて

　・おはようございます。
　・こんにちは。

■夜に

　・こんばんは。
　・おやすみなさい。
　・さようなら。

==============================

EOT;
        $this->assertEquals($result, $expected);
    }
}
