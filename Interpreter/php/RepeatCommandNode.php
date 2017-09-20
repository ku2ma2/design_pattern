<?php

namespace Interpreter;

require_once __DIR__.'/Node.php';
require_once __DIR__.'/Context.php';

/**
 * <repeat command>に対応するクラス
 *
 * ex)
 * <repeat command> ::= repeat <number> <command list>
 *
 * @access public
 * @extends Node
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class RepeatCommandNode extends Node
{
    private $number;
    private $commandListNode;

    private function parse(Context $context)
    {
        $context->skipToken($this->name);
        $this->number = $context->currentNumber();
        $context->nextToken();

        $this->commandListNode = new CommandListNode();
        $this->commandListNode->parse($context);
    }

    public function __toString(): string
    {
        return $this->commandListNode ? "[repeat {$this->number} {$this->commandListNode}]" : "";
    }
}
