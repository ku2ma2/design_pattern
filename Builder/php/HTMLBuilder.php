<?php
require_once "Builder.php";

class HTMLBuilder extends Builder
{
    private $filename = '';
    private $buffer = '';

    public function makeTitle(string $title)
    {
        // タイトルからファイル名を生成する
        $this->filename = $title . ".html";

        $this->buffer = "<html><head><title>${title}</title></head><body>\n";
        $this->buffer .= "<h1>${title}</h1>\n";
    }

    public function makeString(string $str)
    {
        $this->buffer .= "<p>$str</p>\n";
    }

    public function makeItems(array $items)
    {
        $this->buffer = "<ul>\n";
        foreach ($items as $item) {
            $this->buffer .= "<li>{$item}</li>\n";
        }
        $this->buffer .= "</ul>\n";
    }

    public function close()
    {
        $this->buffer .= "</body></html>\n";
    }

    public function getBuffer()
    {
        return $this->buffer;
    }

    public function getResult()
    {
        return $this->filename;
    }
}
