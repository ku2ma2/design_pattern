<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/HtmlWriter.php';

/**
 * Facade HtmlWriter Test
 */
final class FacadeHtmlWriterTest extends TestCase
{
    private $writer;

    private function before()
    {
        $this->writer = new SplTempFileObject(); // 一時的なファイルオブジェクトを作成する
    }
    public function test_titile_タイトルをHTML形式にフォーマット化する()
    {
        $expected = 'html';

        $this->before();
        $write = new \Facade\HtmlWriter($this->writer);
        $write->title("Welcome to USER's page!");
        
        $actual = '';
        foreach ($write as $line) {
            $actual .= $line;
        }
        var_dump($actual);

        $this->assertEquals($actual, $expected);
    }
}
