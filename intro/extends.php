<h3>繼承</h3>
<?php

class Animal
{
    // 保護成員變數 $name，
    // 只有在本類別Animal及其子類別中可以訪問
    protected $name;

    // 建構名稱
    // 宣告屬性function
    // 建構函式，初始化 Animal 物件時執行，接收一個名稱參數
    public function __construct($name)
    {
        // 將參數傳入的名稱賦值給 $this->name
        $this->name = $name;
    }

    // 公開的方法，用來設定動物的名稱
    public function setName($name)
    {
        // 使用 $this->name 存儲傳入的名稱
        $this->name = $name;
    }

    // 公開的方法，用來獲取動物的名稱   
    public function getName()
    {
        // 返回儲存在 $this->name 中的名稱
        return $this->name;
    }
}

// 實例化instant（創建）一個 Animal 物件，並初始化名稱為 '阿明'
$animal = new Animal('阿明'); 

// 繼承用extends: 
// Dog 使用 Animal也可擴充
// 定義一個 Dog 類別，繼承自 Animal 類別
class Dog extends Animal
{

    // 增加狗的屬性函式
    // 定義一個額外的方法 sit，用來顯示狗的名字並執行 '坐下' 操作
    function sit()
    {
        // 增加誰坐下
        echo $this->name;
        // 動作
        echo "坐下";
    }
}
// 實例化（創建）一個 Dog 物件，並初始化名稱為 '小白'
$dog = new Dog('大白');

// 輸出狗的名字，應該顯示 '大白'
echo $dog->getName();
echo "<br>";
// 設定狗的名字為 '大白'
echo $dog->setName('小白');
// 再次輸出狗的名字，應該顯示 '小白'
echo $dog->getName();

// 有子類別和父類別
// 呼叫 Dog 類別的 sit 方法，顯示狗的名字和 '坐下'
$dog->sit();
// 增加動詞，父類別沒有sit
?>