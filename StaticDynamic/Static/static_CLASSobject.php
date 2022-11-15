<?php

// CLASS & OBJECT 
class Man{

public $name ="Tarek";
public $age="14";
public $address="Dhaka";
public $gender="Male";


function fun(){

    return"<b>Full Name:</b> Tarek Ahammed Raju";


    }

}

$tarek= new Man();
echo $tarek->name ."<br>";
echo $tarek->age . "<br>";
echo $tarek->address . "<br>";
echo $tarek->gender . "<br>";
echo $tarek->fun() . "<br>";


?>