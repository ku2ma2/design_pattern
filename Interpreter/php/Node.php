<?php

namespace Interpreter;

abstract class Node
{
    abstract public function parse(Context $context);
}
