<?php
require "reg.php";

class student1_BasicInfo extends BasicInfo{

     function id(){
        echo "<br>" . "<b>ID: </b> 2018100000015" ."<br>";

     }
     function name(){
        echo "<b>Name: </b> TarekAhammed Raju" ."<br>";
     }
    function program(){
        echo "<b>Program: </b> BSc in CSE" . "<br>";

    }
     function batch(){
        echo "<b>Batch: </b> 49" . "<br>" ."<br>";

     }
}


class student1_CourseInfo extends CourseInfo{
    function credit_fee(){
        echo "<b><i>Per Credit = 3600 bdt</i></b>" ."<br>" . "<br>";
    }


}




function Student1_BasicInfo_Output(){
    $student1 = new student1_BasicInfo();
    $student1->Setdata("62 - Fall 2022", "[SBB] Mr. Md. Shohel Babu", "# 62Y1M49N15Y");
    $student1->DisplayData();
    $student1->id();
    $student1->name();
    $student1->program();
    $student1->batch();

}

function student1_CourseInfo_Output(){

    $course =  new student1_CourseInfo();
    $course->credit_fee();
    $course1 = new student1_CourseInfo();
    $course1->Setdata("01","ETE2024.2","Communication Theory Lab"," ","1.0","Regular","3600");
    $course1->DisplayData();
    echo"<br>";
    
    $course2 = new student1_CourseInfo();
    $course2->Setdata("02", "CSE4012.2", "Computer Networking Lab", " ", "1.0", "Regular", "3600") ;
    $course2->DisplayData();
    echo "<br>";

    $course3 = new student1_CourseInfo();
    $course3->Setdata("03", "ETE2023.1", "Computer Networking", " ", "3.0", "Regular", "10800") ;
    $course3->DisplayData();
    echo "<br>";

    $course4 = new student1_CourseInfo();
    $course4->Setdata("04", "CSE2026.1", "Algorithm Lab", " ", "1.0", "Regular", "3600") ;
    $course4->DisplayData();
    echo "<br>";

    $course5 = new student1_CourseInfo();
    $course5->Setdata("05", "EEE2012.2", "Electronic Devices And Circuits I Lab", " ", "1.0", "Regular", "3600");
    $course5->DisplayData();
    echo "<br>";

    $course6 = new student1_CourseInfo();
    $course6->Setdata("05", "CSE4011.2", "Computer Networking", " ", "1.0", "Regular", "10800");
    $course6->DisplayData();
    echo "<br>";

}




















echo "---------------<b>Course Registration Form</b>---------------
" ."<br>" ;
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<i>[office copy]</i></b>
" ."<br>" . "<br>";

echo Student1_BasicInfo_Output();
echo student1_CourseInfo_Output();

?>