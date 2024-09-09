<?php
class vehicle{
    public $brand, $model, $year;
    function __construct($b,$m,$y){
        $this->brand=$b;
        $this->model=$m;
        $this->year=$y;
    }
    function details(){
        echo $this->brand;
        echo '<br>';
        echo $this->model;
        echo '<br>';
        echo $this->year;
    }
}
$v=new vehicle('Honda Shine','132cw',2012);
echo 'the vehicle details: ';
echo '<br>';
$v->details();
?>