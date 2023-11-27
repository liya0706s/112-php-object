<h1>物件介紹</h1>
<?php

// 類別
class Animal{
     // 在類別內宣告變數，稱為屬性
    public $name;

    // 方法
    public function setName($name){
        // 這一個物件$this 用瘦箭頭指定一個叫做name
        $this->name=$name;
        // 把參數內容再指定給左邊
    }
}

// 實例化 instant 
// 建立物件$animal= new 類別，稱為實體化
$animal=new Animal; 


// 輸出目前動物的名稱，注意此時 $animal->name 尚未設定，因此顯示空字串
echo '顯示名稱:'.$animal->name;
// 用瘦箭頭，指定裡面的"成員"name預設是沒有值
echo "<br>";

// 呼叫 Animal 物件的 setName 方法，設定動物的名稱為 '小花'
$animal->setName('小花');
echo '顯示名稱:'.$animal->name;
echo "<br>";

$animal->getName('小白');
$animal->name="小白";
// 再次輸出動物的名稱，此時應該顯示 '小花'
echo '顯示名稱:'.$animal->name;
echo "<br>";

?>



