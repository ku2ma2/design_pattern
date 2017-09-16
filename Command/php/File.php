<?php

namespace Command;

/**
 * Receiverクラスに相当
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 * @todo TODO
 */
class File
{
    private $name;

    /**
     * コンストラクタ
     *
     * @access public
     * @param string $name ファイル名
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * ファイル名の取得
     *
     * @access public
     * @param void
     * @return string $this->name ファイル名
     */
    public function getName()
    {
        return $this->name;
    }

    public function decompress()
    {
        return "{$this->name}を展開しました\n";
    }
    public function compress()
    {
        return "{$this->name}を圧縮しました\n";
    }
    public function create()
    {
        return "{$this->name}を作成しました\n";
    }
}
