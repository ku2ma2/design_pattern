<?php

namespace Command;

/**
 * コマンド操作するキュー
 *
 * INvokerクラスに相当
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Queue
{
    private $commands = [];
    private $corrent_index = 0;

    /**
     * コンストラクタ
     *
     * @access public
     * @param void
     * @return void
     */
    public function __construct()
    {
    }

    public function addCommand(Command $command)
    {
        $this->commands[] = $command;
    }

    /**
     * コマンドのリストを全て実行
     *
     * @access public
     * @param void
     * @return void
     */
    public function run()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}
