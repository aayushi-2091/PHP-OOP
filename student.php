<?php
class student{
    public $name, $age, $grade;
    function __construct($n, $a, $g){
        $this->name=$n;
        $this->age=$a;
        $this->grade=$g;
    }
    function student_details(){
        echo $this->name;
        echo '<br>';
        echo $this->age;
        echo '<br>';
        echo $this->grade;                          
    }
}
$s=new student('Arpan', 26, 'A');
$s1=new student('Aayushi', 23, 'A');
$s2=new student('Ayush', 22, 'B');
$s3=new student('Neha', 24, 'C');
echo 'Student details:';
echo '<br>';
echo $s->student_details();
echo '<br>';
echo '<br>';
echo $s1->student_details();
echo '<br>';
echo '<br>';
echo $s2->student_details();
echo '<br>';
echo '<br>';
echo $s3->student_details();
?>