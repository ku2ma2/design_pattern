<?php

namespace Interpreter;

require_once __DIR__.'/Node.php';
require_once __DIR__.'/Context.php';

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
}
