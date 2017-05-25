<?php

class Book
{
    private $name;

    /**
     * コンストラクタ
     *
     * 本の名前を与えられてクラス変数に追加する
     *
     * @access public
     * @param String $name 本の名前
     * @return void
     */
    public function __construct($name = '')
    {
        $this->name = $name;
    }

    /**
     * 本の名前取得
     *
     * @access public
     * @param void
     * @return String $this->name
     */
    public function getName()
    {
        return $this->name;
    }
}
