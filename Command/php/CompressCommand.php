<?php

namespace Command;

require_once __DIR__ .'/Command.php';
require_once __DIR__ .'/File.php';

/**
 * ファイルの圧縮コマンド
 *
 * ConcreteCommandクラスに相当
 *
 * @access public
 * @implements Command
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class CompressCommand implements Command
{
    private $file;

    /**
     * コンストラクタ
     *
     * @access public
     * @param \Command\File $file ファイルインスタンス
     * @return void
     */
    public function __construct(\Command\File $file)
    {
        $this->file = $file;
    }

    /**
     * コマンドの実行
     *
     * @access public
     * @param void
     * @return void
     */
    public function execute()
    {
        $this->file->compress();
    }
}
