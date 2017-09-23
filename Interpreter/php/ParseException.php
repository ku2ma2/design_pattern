<?php

namespace Interpreter;

/**
 * 構文解析中の例外クラス
 *
 * @access public
 * @extends \Exception
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class ParseException extends \Exception
{
    public function __construct(string $msg)
    {
        parent::__construct($msg);
    }
}
