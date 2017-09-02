<?php

namespace State;

/**
 * 金庫の状態を表すインターフェース
 *
 * @interface
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
interface State
{
    public function doClock(Context $context, int $hour);
    public function doUse(Context $context);
    public function doAlerm(Context $context);
    public function doPhone(Context $context);
}
