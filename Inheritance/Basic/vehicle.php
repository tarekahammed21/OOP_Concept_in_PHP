<?php

class Vehicle {

    public $name; 
    public $speed;

    public function setData($name,$speed){
        $this->name=$name;
        $this->speed=$speed;
    }
    
    public function display(){

        echo"Car Name: ".$this->name."<br>" ;
        echo"Car Speed: ". $this->speed."<br>";
    }
} 





?>