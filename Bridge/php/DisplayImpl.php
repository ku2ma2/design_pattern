<?php

/**
 * -
 *
 * -
 *
 * @access public
 * @extends DisplayImpl
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
abstract class DisplayImpl
{
    abstract public function rawOpen();
    abstract public function rawPrint();
    abstract public function rawClose();
}
