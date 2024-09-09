<?php
class person_emp{
    public $name, $age;
}
class employee extends person_emp{
    public $salary, $position;
    function __construct($n,$a,$s,$p){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
        $this->position=$p;
    }
    function details(){
        echo 'Details:';
        echo '<br>';
        echo 'Name: '.$this->name;
        echo '<br>';
        echo 'Age: '.$this->age;
        echo '<br>';
        echo 'Salary: '.$this->salary;
        echo '<br>';
        echo 'Position: '.$this->position;
    }
}
$emp=new employee('Aayushi', 23, 25000, 'Software Developer');
$emp->details();
?>