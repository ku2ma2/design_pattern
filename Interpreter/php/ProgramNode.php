<?php

namespace Interpreter;

require_once __DIR__.'/Node.php';

class ProgramNode extends Node
{
    private $commandListNode;
    
    public function parse(Context $context)
    {
        $context->skipToken("program");
        $this->commandListNode = new CommandListNode();
        $this->commandListNode->parse($context);
    }
    public function __toString(): string
    {
        return $this->commandListNode ? "[program {$this->commandListNode}]" : "";
    }
}
