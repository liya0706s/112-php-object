<h1>物件介紹</h1>
<?php

// 類別
class Animal{
     // 在類別內 定義公開的變數稱為，屬性
    public $name;

    // 在類別內 定義一個公開的函式稱為，方法 
    // setName函式，用來設定動物的名稱
    public function setName($name){
        // 使用 $this->name 存儲傳入的名稱
        // 將傳入的名稱設定給物件的 name 屬性
        $this->name=$name;
    }
}

// 類別 實例化 instant 又稱 實體化 new..，
// 建立物件$animal= new class_name
$animal=new Animal; 


// 輸出目前動物的名稱，注意此時 $animal->name 尚未設定，因此顯示空字串
echo '顯示名稱:'.$animal->name;
// name預設是沒有值
echo "<br>";

// 呼叫 Animal 物件的 setName 方法，設定動物的名稱為 '小花'
$animal->setName('小花');
// 再次輸出動物的名稱，此時應該顯示 '小花'
echo '顯示名稱:'.$animal->name;
echo "<br>";

// $animal->setName('小白');
$animal->name="小白";
// 再次輸出動物的名稱，此時應該顯示 '小花'
echo '顯示名稱:'.$animal->name;
echo "<br>";

?>



