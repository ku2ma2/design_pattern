<?php

namespace Interpreter;

require_once __DIR__.'/Node.php';
require_once __DIR__.'/Context.php';
require_once __DIR__.'/CommandListNode.php';

/**
 * <program>に対応するクラス
 *
 * ex)
 * <program> ::= program <command list>
 *
 * @access public
 * @extends Node
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
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
