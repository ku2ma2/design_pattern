<?php
require_once "Builder.php";

class TextBuilder extends Builder
{
    private $buffer = '';

    public function makeTitle(string $title)
    {
        $this->buffer .= '=============================='."\n";
        $this->buffer .= "『{$title}』\n";
        $this->buffer .= "\n";
    }

    public function makeString(string $str)
    {
        $this->buffer .= "■{$str}\n";
        $this->buffer .= "\n";
    }

    public function makeItems(array $items)
    {
        foreach ($items as $item) {
            $this->buffer .= "　・{$item}\n";
        }
        $this->buffer .= "\n";
    }

    public function close()
    {
        $this->buffer .= '=============================='."\n";
    }

    public function getResult()
    {
        return $this->buffer;
    }
}
