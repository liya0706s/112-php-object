<?php
date_default_timezone_set("Asia/Taipei");
session_start();

// 定義一個 DB 類別
class DB
{
    // 資料庫連接字串，指定主機、編碼和資料庫名稱（需要更改 dbname）
    // dbname needs to be changed
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    // 宣告$pdo不能有運算元
    // 資料庫連接實例
    protected $pdo;
    protected $table;

    // 建構函式，初始化 DB 物件時執行，接收一個資料表名稱參數
    public function __construct($table)
    {
        // 將傳入的資料表名稱存儲在 $this->table 中
        $this->table = $table;

        // 創建 PDO 連接實例，連接資料庫
        // $this->dsn讀外面的$dsn
        $this->pdo = new PDO($this->dsn, 'root', '');
    }
    // 以上，資料庫操作建立建構式


    
    function all($where = '', $other = '')
    {
        $sql = "select * from `$this->table` ";

        if (isset($this->table) && !empty($this->table)) {

            if (is_array($where)) {

                if (!empty($where)) {
                    foreach ($where as $col => $value) {
                        $tmp[] = "`$col`='$value'";
                    }
                    $sql .= " where " . join(" && ", $tmp);
                }
            } else {
                $sql .= " $where";
            }

            $sql .= $other;
            //echo 'all=>'.$sql;
            $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        } else {
            echo "錯誤:沒有指定的資料表名稱";
        }
    }

    function find($id)
    {
        $sql = "select * from `$this->table` ";

        if (is_array($id)) {
            foreach ($id as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
            $sql .= " where " . join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " where `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        //echo 'find=>'.$sql;
        $row = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    function update($id, $cols)
    {

        $sql = "update `$this->table` set ";

        if (!empty($cols)) {
            foreach ($cols as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
        } else {
            echo "錯誤:缺少要編輯的欄位陣列";
        }

        $sql .= join(",", $tmp);
        $tmp = [];
        if (is_array($id)) {
            foreach ($id as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
            $sql .= " where " . join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " where `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        // echo $sql;
        return $this->pdo->exec($sql);
    }

    function insert($values)
    {

        $sql = "insert into `$this->table` ";
        $cols = "(`" . join("`,`", array_keys($values)) . "`)";
        $vals = "('" . join("','", $values) . "')";

        $sql = $sql . $cols . " values " . $vals;

        //echo $sql;

        return $this->pdo->exec($sql);
    }

    function del($id)
    {
        $sql = "delete from `$this->table` where ";

        if (is_array($id)) {
            foreach ($id as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
            $sql .= join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        //echo $sql;

        return $this->pdo->exec($sql);
    }
}

function dd($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

$student=new DB('students');
$rows=$student->find('25');
print_r($rows);

?>
