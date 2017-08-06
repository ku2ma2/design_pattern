<?php

namespace Facade;

/**
 * メールアドレスからユーザ名を得るクラス
 *
 * @access public
 * @author ku2ma2 <motorohi.tsumaniku@gmail.com>
 * @copyright ku2ma2
 */
class Database
{

    /**
     * コンストラクタ
     *
     * @access private
     * @param void
     * @return void
     */
    final private function __construct()
    {
    }

    public static function getProperties(string $dbname)
    {
        $filename = __DIR__ . '/' . $dbname . '.txt';
        try {
            $data = file_get_contents($filename);
            $lines = explode("\n", $data);
            $result = [];
            foreach ($lines as $line) {
                $columns = explode('=', trim($line));
                $result[$columns[0]] = $columns[1];
            }
            return $result;
        } catch (Exception $e) {
            echo "Warning: " . $filename . " is not found.";
        }
        return [];
    }
}
