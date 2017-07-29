<?php

namespace Visitor;

// require_once __DIR__."/Visitor.php";

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

    /**
     * 不明関数呼び出し
     *
     * 定義されていないメソッドが呼び出された時に処理される
     * マジックメソッド __callを使って オーバーロードを定義。
     *
     * @access public
     * @param string $func 関数名
     * @param arrray $arg 引数配列
     * @return object
     */
    public function __call(string $func, array $arg)
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

    /**
     * ファイル用のvisitメソッド
     *
     * __callから呼び出される Fileが与えられた際に実行される
     *
     * @access private
     * @param \Visitor\File $file Fileオブジェクト
     * @return string
     */
    private function visitFile(\Visitor\File $file)
    {
        echo "{$this->currentdir}/{$file}\n";
    }

    /**
     * ディレクトリ用のvisitメソッド
     *
     * __callから呼び出される Directoryが与えられた際に実行される
     *
     * @access private
     * @param \Visitor\Directory $directory Directoryオブジェクト
     * @return string
     */
    private function visitDirectory(\Visitor\Directory $directory)
    {
        echo "{$this->currentdir}/{$directory}\n";

        $savedir = $this->currentdir; // 一時的にディレクトリ名を保存
        $this->currentdir .= "/{$directory->getName()}";

        $it = $directory->iterator(); // iteratorオブジェクトを取得
        $it->rewind(); // カーソルを初期化

        while ($it->hasNext()) {
            $entry = $it->next();
            $entry->accept($this); // ここが分かりづらい
        }
        $this->currentdir = $savedir;
    }
}
