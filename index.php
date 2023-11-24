<h1>物件介紹</h1>
<?php

// // 定義一個 Animal 類別
class Animal{
     // 宣告一個公開的成員變數 $name，用來儲存動物的名稱
    public $name;

    // 定義一個公開的方法 setName，用來設定動物的名稱
    public function setName($name){
        // 使用 $this->name 存儲傳入的名稱
        $this->name=$name;
    }

    // 把$name指定回等號左邊
}

// 實體化 new..
$animal=new Animal; //實例化 instant

echo '顯示名稱:'.$animal->name;
// name預設是沒有值
echo "<br>";
$animal->setName('小花');
// 執行物件裡的方法命名
echo '顯示名稱:'.$animal->name;
echo "<br>";

?>



