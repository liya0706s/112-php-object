<?php

class Animal{
    protected $name;

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

class Dog extends Animal{

    function sit(){
        echo $this->name;
        echo "坐下";
    }
}

$dog=new Dog('阿富');
echo $dog->getName();
echo "<br>";
echo $dog->setName('阿旺');
echo $dog->getName();
$dog->sit();
