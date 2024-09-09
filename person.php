<?php
class person{
    public $name, $age;
    function __construct($n, $a){
        $this->name=$n;
        $this->age=$a;
    }
    function __toString(){
        return 'Name: '.$this->name.', Age: '.$this->age;
    }
}
$p=new person('Aayushi',23);
echo $p;