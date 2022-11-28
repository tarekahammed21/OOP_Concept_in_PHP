<?php

//Abstract class contain at least 1 abstract function
//Abstract Function must declare but not implement
//Abstract class couldnot create object
//Abstract class,child class must contain abstract function  
abstract class class1{

    abstract  function test();
}





class class2 extends class1{

    function test(){
        echo "Test";
    }
} 

$class= new class2();
$class->test();




?>