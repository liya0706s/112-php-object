<h1>物件介紹</h1>
<?php

// // 定義一個 Animal 類別
class Animal{
     // 宣告一個公開的成員變數 $name，用來儲存動物的名稱
    public $name;

    // 定義一個公開的方法 setName，用來設定動物的名稱
    public function setName($name){
        // 使用 $this->name 存儲傳入的名稱
        // 把$name指定回等號左邊
        $this->name=$name;
    }
}

// 實體化 new..
$animal=new Animal; 
//實例化 instant

// 輸出目前動物的名稱，注意此時 $animal->name 尚未設定，因此顯示空字串
echo '顯示名稱:'.$animal->name;
// name預設是沒有值
echo "<br>";
// 呼叫 Animal 物件的 setName 方法，設定動物的名稱為 '小花'
$animal->setName('小花');
// 再次輸出動物的名稱，此時應該顯示 '小花'
echo '顯示名稱:'.$animal->name;
echo "<br>";

?>



