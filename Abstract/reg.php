<?php


abstract class BasicInfo{

    public $semester;
    public $adviser;
    public $code;

    public function Setdata($sem,$adv,$code){
        $this->semester= $sem;
        $this->adviser= $adv;
        $this->code= $code;
    }
    public function DisplayData(){
        echo"<b>Semester: </b>" . $this->semester ."<br>" ;
        echo"<b>Adviser: </b>" . $this->adviser . "<br>";;
        echo"<b>Code: </b>". $this->code . "<br>";;
    }

    abstract  function id();
    abstract  function name();
    abstract  function program();
    abstract  function batch();

 }

abstract class CourseInfo{
    public $serial;
    public $CourseCode;
    public $CourseTitle;
    public $prv_grade;
    public $credits;
    public $type;
    public $amount;

    public function Setdata($serial, $CourseCode, $CourseTitle, $prv_grade, $credits, $type, $amount)
    {
        $this->serial = $serial;
        $this->CourseCode = $CourseCode;
        $this->CourseTitle = $CourseTitle;
        $this->prv_grade = $prv_grade;
        $this->credits = $credits;
        $this->type = $type;
        $this->amount = $amount;
    }
    public function DisplayData()
    {
        echo "<b>Serial No: </b>" . $this->serial . "<br>";
        echo "<b>Course Code: </b>" . $this->CourseCode . "<br>";
        echo "<b>Course Title: </b>" . $this->CourseTitle . "<br>";
        echo "<b>Previous Grade: </b>" . $this->prv_grade . "<br>";
        echo "<b>Credits: </b>" . $this->credits . "<br>";
        echo "<b>Type: </b>" . $this->type . "<br>";
        echo "<b>Amount: </b>" . $this->amount . "<br>";
    }

   abstract  function credit_fee();


}






?>