<?php

// class TextBuilder extends Builder
class TextBuilder
{
    private $buffer = '';

    public function makeTitle(string $title)
    {
        $this->buffer .= '==============================='."\n";
    }
}
