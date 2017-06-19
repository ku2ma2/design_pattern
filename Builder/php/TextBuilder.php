<?php

// class TextBuilder extends Builder
class TextBuilder
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

    public function getResult()
    {
        return $this->buffer;
    }
}
