<?php

class VehicleType{
    public $type;
    public $brand;
    public $model;

    public function SetData($type,$brand,$model){

        $this->type = $type;
        $this->brand = $brand;
        $this->model = $model;

    }

    public function display(){
        echo"<b>Vehicle Type: </b>" . $this->type ."<br>";
        echo"<b>Vehicle Brand: </b>" . $this->brand ."<br>";
        echo"<b>Vehicle Model: </b>" . $this->model ."<br>";
    }

    public function Mileage(){

        echo "own speed";
    }

}

?>