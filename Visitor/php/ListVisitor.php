<?php

namespace Visitor;

/**
 * ファイルやディレクトリを訪れる訪問者を表す抽象クラス
 *
 * PHPではオーバーロードはサポートされていないので
 * マジックメソッド __call にて FileとDirectoryを区別している
 *
 * @access public
 * @abstract
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class ListVisitor
{
    private $currentdir = "";

    public function __call(string $func, $arg)
    {
        
        // メソッド名がVisit以外は例外を投げる
        if ($func != 'visit') {
            throw new Exception('visit以外のメソッドが呼ばれました');
        }

        $classname = get_class($arg[0]); // アクセスしてきたクラス名の取得
        
        // クラス名から処理を分ける
        if ($classname === 'Visitor\File') {
            return $this->visitFile($arg[0]);
        } elseif ($classname === 'Visitor\Directory') {
            return $this->visitDirectory($arg[0]);
        }
    }
    private function visitFile(\Visitor\File $file)
    {
        echo "{$this->currentdir}/{$file}\n";
    }
    private function visitDirectory(\Visitor\Directory $directory)
    {
        echo "{$this->currentdir}/{$directory}\n";

        $savedir = $this->currentdir; // 一時的にディレクトリ名を保存
        $this->currentdir .= "/{$directory->getName()}";

        $it = $directory->iterator(); // iteratorオブジェクトを取得
        $it->rewind(); // カーソルを初期化

        while ($it->hasNext()) {
            $entry = $it->next();
            $entry->accept($this); // ここが全然わからん
        }
        $this->currentdir = $savedir;
    }
}
