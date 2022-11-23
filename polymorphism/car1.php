<?php
require "vehicle.php";

class car1_VehicleType extends VehicleType{
    
    public function Mileage() //overriding
    {
        echo "200kmph";
    }
    

}

$car1 = new car1_VehicleType();
$car1->SetData("car","Audi","2022");
$car1->display();

$car1->Mileage();

?>
