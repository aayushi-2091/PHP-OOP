<?php
class circle{
    public $radius;
    public $a;
    public $c;
    public function area($radius){
        $this->radius=$radius;
        $a=(3.14*($radius*$radius));
        return $a;
    }
    public function circumference($radius){
        $this->radius=$radius;
        $p=2*3.14*$radius;
        return $p;
    }
}
$cir = new circle();
echo 'Area: '. $cir->area(2);
echo '<br>';
echo 'Circumference: '. $cir->circumference(2);
?>