<?php

namespace Interpreter;

require_once __DIR__.'/Node.php';
require_once __DIR__.'/Context.php';
require_once __DIR__.'/RepeatCommandNode.php';
require_once __DIR__.'/PrimitiveCommandNode.php';

/**
 * <command>に対応するクラス
 *
 * ex)
 * <command> ::= <repeat command> | <primitive command>
 *
 * @access public
 * @extends Node
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class ProgramNode extends Node
{
    private $node;

    private function parse(Context $context)
    {
        if ($context->currentToken() === "repeat") {
            $this->node = new RepeatCommandNode();
            $this->node->parse($context);
        } else {
            $this->node = new PrimitiveCommandNode();
            $this->node->parse($context);
        }
    }

    public function __toString(): string
    {
        return $this->node ?? ""; // nodeに設定されていない場合にNoticeを出さない。
    }
}
