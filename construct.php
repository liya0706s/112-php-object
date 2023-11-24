<h3>介紹建構式</h3>
<?php
class Animal{
    public $name;

    // 建構名稱
    public function __construct($name)
    {
        $this->name=$name;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getName(){
        return $this->name;
    }

}

$animal=new Animal('阿明'); //實例化 instant
// 被new出來當下被執行construct
// 車子被製造出來時，就知道有四個輪子
echo '顯示名稱:'.$animal->getName();
echo "<br>";
// 阿明改成小花
$animal->setName('小花');
echo '顯示名稱:'.$animal->getName();
// 初始值的方法
echo "<br>";
// $animal->name'阿忠';
echo "<br>";
// echo '顯示名稱:'.$animal->getName();
// 公開出來的方法
// echo '顯示名稱:'.$animal->name;
echo "<br>";