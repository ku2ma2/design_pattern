<?php

namespace Interpreter;

require_once __DIR__.'/Node.php';
require_once __DIR__.'/Context.php';
require_once __DIR__.'/ParseException.php';

/**
 * <command list>に対応するクラス
 *
 * ex)
 * <command list> ::= <command>* end
 *
 * @access public
 * @extends Node
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class ProgramNode extends Node
{
    private $list = [];

    private function parse(Context $context)
    {
        while (true) {
            if ($context->currentToken() === null) {
                throw new ParseException("Missing 'end'");
            }
            if ($context->currentToken() === "end") {
                $context->skipToken("end");
                break;
            }
            $commandNode = new CommandNode();
            $commandNode->parse($context);
            $this->list[] = $commandNode;
        }
    }

    public function __toString(): string
    {
        return $this->list ? "[".join(" ", $this->list) .":" : "[]";
    }
}
