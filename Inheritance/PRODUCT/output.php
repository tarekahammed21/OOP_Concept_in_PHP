<?php

include "./product.php";








/*-----PENCIL-----*/ 

function pencil_Status(){

    // $tar = new RedPencil();

    echo "<b>**********All Pencil Status Are Given Bellow:**********</b>" ."<br>" ."<br>";
    $nat2b = new Pencil();
    $nat2b->setData("Nataraj 2B", "10 taka(bdt)", "BLUE");
    $nat2b->display();
  
    echo "<br>";

    $nat4b = new Pencil();
    $nat4b->setData("Nataraj 4B", "15 taka(bdt)", "BLACK");
    $nat4b->display();
    

    echo "<br>";


    $nathb = new Pencil();
    $nathb->setData("Nataraj HB", "5 taka(bdt)", "BLACK");
    $nathb->display();
    echo "<br>";




}

/*-----PEN-----*/ 

function pen_status(){
    echo "<b>**********All Pen Status Are Given Bellow:**********</b>" . "<br>" . "<br>";
    $high_school= new Pen();
    $high_school->setData("Matador Hi School","05 bdt","Black"); //$name, $price, $color
    $high_school->display();
    echo"<br>";

    $high_school2 = new Pen();
    $high_school2->setData("Matador Hi School", "05 bdt", "Blue"); //$name, $price, $color
    $high_school2->display();
    echo "<br>";

    $high_school3 = new Pen();
    $high_school3->setData("Matador Hi School", "05 bdt", "Red"); //$name, $price, $color
    $high_school3->display();
    echo "<br>";
    
}


/*-----PEN-----*/ 

function bookDetails (){
    echo "<b>**********All Books Status Are Given Bellow:**********</b>" . "<br>" . "<br>";
    $book1= new Book();
    $book1->setData("Computer Networking Guru (MDSR)", "Mohammod Sohel Rana", "250$", "Instock");
    $book1-> display();
    echo "<br>";

    $book2 = new Book();
    $book2->setData("Computer Networking Guru (AHQ)", "Mohammod Ashraful Hoque", "350$", "Instock");
    $book2->display();
    echo "<br>";
    $book1 = new Book();
    $book1->setData("Computer Architecture (RG)", "Raihan Goni", "150$", "Instock");
    $book1->display();
    echo "<br>";



}


function WatchDetails(){
    echo "<b>**********All Watchs Status Are Given Bellow:**********</b>" . "<br>" . "<br>";
    $watch1= new Watch ();
    $watch1->setData("Apple", "Series 8", "300$", "Asian Blue", "Available"); //setData($brand, $model, $price, $color, $stock)
    $watch1->display();
    echo "<br>";

    $watch2 = new Watch();
    $watch2->setData("Apple", "Ultra", "250$", " Blue", "Not In Stock"); //setData($brand, $model, $price, $color, $stock)
    $watch2->display();
    echo "<br>";

    $watch3 = new Watch();
    $watch3->setData("Apple", "Nike Series 7", "350$", "Black Orange Mix ", "Available"); //setData($brand, $model, $price, $color, $stock)
    $watch3->display();
    echo "<br>";

}

function laptopsDetails(){
    echo "<b>**********All Laptops Status Are Given Bellow:**********</b>" . "<br>" . "<br>";
        $laptop1= new Laptop ();
        $laptop1->setData("Asus", "123","44,000 taka","Available");
        $laptop1->display();
        echo"<br>";

    $laptop2 = new Laptop();
    $laptop2->setData("HP", "456", "48,000 taka", "Not Available");
    $laptop2->display();
    echo "<br>";




}


function desktopDetails (){
    echo "<b>**********All Desktop Status Are Given Bellow:**********</b>" . "<br>" . "<br>";

        $desktp1= new Desktop ();
        $desktp1->setData("-----","-----","-----","------");
        $desktp1->display();
        echo"<br>";
}

echo pencil_Status();
echo pen_status();
echo bookDetails();

echo WatchDetails();
echo laptopsDetails();
echo desktopDetails();



?>