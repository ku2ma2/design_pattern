<?php

namespace Interpreter;

require_once __DIR__.'/Node.php';
require_once __DIR__.'/Context.php';
require_once __DIR__.'/ParseException.php';

/**
 * <primitive command>に対応するクラス
 *
 * ex)
 * <primitive command> ::= go | right | left
 *
 * @access public
 * @extends Node
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class ProgramCommandNode extends Node
{
    private $name;

    private function parse(Context $context)
    {
        $this->name = $context->currentToken();
        $context->skipToken($this->name);
        if ($this->name !== "go"
        && $this->name !== "right"
        && $this->name !== "left") {
            throw new ParseException("{$this->name} is undefined");
        }
    }

    public function __toString(): string
    {
        return $this->name ?? ""; // nodeに設定されていない場合にNoticeを出さない。
    }
}
