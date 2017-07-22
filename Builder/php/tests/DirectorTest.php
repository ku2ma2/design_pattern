<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/TextBuilder.php';
require_once dirname(__DIR__) . '/Director.php';

/**
 * Builder Director Test
 */
final class BuilderDirectorTest extends TestCase
{
    public function testCunstruct()
    {
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

        $textbuilder = new TextBuilder();
        $director = new Director($textbuilder);
        $director->construct();
        $actual = $textbuilder->getResult();


        $this->assertEquals($expected, $actual);
    }
}
