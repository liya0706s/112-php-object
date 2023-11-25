<h1>物件介紹</h1>
<?php

class Animal{
    public $name;

    public function setName($name){
        $this->name=$name;
    }
}

$animal=new Animal; 

echo '顯示名稱:'.$animal->name;
echo "<br>";
$animal->setName('小花');
echo '顯示名稱:'.$animal->name;
echo "<br>";

$animal->name="小白";
echo '顯示名稱:'.$animal->name;
echo "<br>";

?>



