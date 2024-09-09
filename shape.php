<?php
abstract class shape{
    public $length, $width;
    function __construct($length, $width){
        $this->length=$length;
        $this->width=$width;
    }
    abstract function calculateArea();
}
class triangle extends shape{
    function calculateArea(){
        return ((1/2)*$this->length*$this->width);
    }
}
class rectangle extends shape{
    function calculateArea(){
        return $this->length*$this->width;
    }
}
$tri=new triangle(2,3);
$rec=new rectangle(2,3);
echo 'Area of triangle: '.$tri->calculateArea();
echo '<br>';
echo 'Area of rectangle: '.$rec->calculateArea();
?>