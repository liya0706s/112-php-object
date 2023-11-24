<?php

class Animal{

}

// 介面寫法
// function和物件名稱不要一樣
// 介面裡面的函式不能有大括號
interface bark{

    function b();
}

// 繼承的寫法
// 繼承裡面要有方法func
// 所有繼承Animal的都有b
class Dog extends Animal implements bark{
    function b(){
        return "汪!";
    }
}

class Cat extends Animal implements bark{
    function b(){
        return "喵!";
        // return 把該字串回給上方Cat物件
    }
}

$dog=new Dog;
$cat=new Cat;

echo $dog->b();
echo "<br>";
echo $cat->b();

?>