<?php

    class Pencil{
        public $name;
        public $price;
        public $color;

        public function setData($name, $price, $color)
            {
            $this->name = $name;
            $this->price = $price;
            $this->color = $color;
            }

        public function display(){


            echo "<b>Pencil Name:</b> " .$this->name."<br>";
            echo "<b>Price:</b> " .$this->price."<br>";
            echo "<b>Color:</b> " .$this->color."<br>";

        }

    }

    class Pen{
        public $name;
        public $price;
        public $color;
        public function setData($name, $price, $color){
            $this->name = $name;
            $this->price= $price;
            $this->color= $color;

        }

        public function display(){
            echo "<b>Pen Name: </b> " .$this->name ."<br>";
            echo "<b>Pen Price: </b>" .$this->price ."<br>";
            echo "<b>Pen Color: </b>" .$this->color ."<br>";

        }

    }



    class Book{
        public $author;
        public $writer;
        public $price;
        public $stock;

        public function setData($author, $writer, $price, $stock){
            $this->author= $author;
            $this->writer=$writer;
            $this->price=$price;
            $this->stock=$stock; 
        }

        public function display (){
            echo "<b>Name Of The Author: </b>" .$this->author ."<br>";
            echo "<b>Name Of The Writer: </b>" .$this->writer ."<br>";
            echo "<b>Price: </b>" .$this->price ."<br>";
            echo "<b>Stock Status: </b>" .$this->stock ."<br>";
        }
    }


   class Watch{
    public $brand;
    public $model;
    public $price;
    public $color;
    public $stock;

    public function setData($brand, $model, $price, $color, $stock){

            $this->brand = $brand;
            $this->model = $model;
            $this->price = $price;
            $this->color = $color;
            $this->stock = $stock;

        }

    public function display (){
        echo"<b>Watch Brand: </b>".$this->brand ."<br>";
        echo"<b>Watch Model: </b>" .$this->model."<br>";
        echo"<b>Watch Price: </b>" .$this->price."<br>";
        echo"<b>Watch Color: </b>" .$this->color."<br>";
        echo"<b>Stock Status: </b>" .$this->stock."<br>";

        
    }


    }

    
    class Laptop{
        public $brand;
        public $model;
        public $price;
        public $stock;

        public function setData($brand, $model, $price, $stock){
            $this->brand= $brand;
            $this->model= $model;
            $this->price= $price;
            $this->stock= $stock;

        }

        public function display(){
            echo"<b>Brand Name: </b>" .$this->brand ."<br>";
            echo"<b>Model: </b>" .$this->model ."<br>";
            echo"<b>Price: </b>" .$this->price ."<br>";
            echo"<b>Stock Status: </b>" .$this->stock ."<br>";
       }
    }


    class Desktop{
        public $brand;
        public $model;
        public $price;
        public $stock;

        public function setData($brand, $model, $price, $stock){
            $this->brand = $brand;
            $this->model = $model;
            $this->price = $price;
            $this->stock = $stock;

        }
    public function display()
    {
        echo "<b>Brand Name:</b> " .$this->brand . "<br>";
        echo "<b>Model: </b>" .$this->model . "<br>";
        echo "<b>Price: </b>" .$this->price . "<br>";
        echo "<b>Stock Status: </b>" .$this->stock . "<br>";
    }

    }

?>