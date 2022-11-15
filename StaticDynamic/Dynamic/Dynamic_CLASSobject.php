<?php

// CLASS & OBJECT 
class Man{

public $name;
public $age;
public $address;
public $gender;


function fun(){

    return"<b>Full Name:</b> Tarek Ahammed Raju";


    }

}

function tarek(){

    $tarek = new Man();
    $tarek->name = "Tarek";
    echo $tarek->name . "<br>";

    $tarek->age = "22";
    echo $tarek->age . "<br>";

    $tarek->address = "Dhaka";
    echo $tarek->address . "<br>";

    $tarek->gender = "Male";
    echo $tarek->gender . "<br>";
    echo $tarek->fun() . "<br>";
    echo "<br>";
}


function raju()
{

    $tarek = new Man();
    $tarek->name = "RAJU";
    echo $tarek->name . "<br>";

    $tarek->age = "24";
    echo $tarek->age . "<br>";

    $tarek->address = "NARAYANGANJ";
    echo $tarek->address . "<br>";

    $tarek->gender = "Male";
    echo $tarek->gender . "<br>";
    echo $tarek->fun() . "<br>";
    echo "<br>";
}



echo tarek();
echo raju();
?>
