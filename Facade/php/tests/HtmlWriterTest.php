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
    public function test_title_タイトルをHTML形式にフォーマット化する()
    {
        $expected = '<html><head><title>Welcome to USER\'s page!</title><head><body>'.PHP_EOL;
        $expected .= '<h1>Welcome to USER\'s page!</h1>'.PHP_EOL;

        $this->before();
        $write = new \Facade\HtmlWriter($this->writer);
        $write->title("Welcome to USER's page!");
        
        $actual = '';
        foreach ($this->writer as $line) {
            $actual .= $line;
        }
        $this->assertEquals($actual, $expected);
    }
    public function test_paragraph_テキストからHTML形式の段落に()
    {
        $expected = '<p>text</p>'.PHP_EOL;

        $this->before();
        $write = new \Facade\HtmlWriter($this->writer);
        $write->paragraph('text');
        
        $actual = '';
        foreach ($this->writer as $line) {
            $actual .= $line;
        }
        $this->assertEquals($actual, $expected);
    }
    public function test_link_URLとテキストからHTML形式にフォーマット化()
    {
        $expected = '<a href="http://example.com">link text</a>'.PHP_EOL;

        $this->before();
        $write = new \Facade\HtmlWriter($this->writer);
        $write->link('http://example.com', 'link text');
        
        $actual = '';
        foreach ($this->writer as $line) {
            $actual .= $line;
        }
        $this->assertEquals($actual, $expected);
    }
    public function test_mailto_メールアドレスと名前からリンク形式にフォーマット化()
    {
        $expected = '<a href="mailto:me@example.com">First Last</a>'.PHP_EOL;

        $this->before();
        $write = new \Facade\HtmlWriter($this->writer);
        $write->mailto('me@example.com', 'First Last');
        
        $actual = '';
        foreach ($this->writer as $line) {
            $actual .= $line;
        }
        $this->assertEquals($actual, $expected);
    }
    public function test_close_HTMLの終端処理()
    {
        $expected = '</body></html>'.PHP_EOL;

        $this->before();
        $write = new \Facade\HtmlWriter($this->writer);
        $write->close();
        
        $actual = '';
        foreach ($this->writer as $line) {
            $actual .= $line;
        }
        $this->assertEquals($actual, $expected);
    }
}
