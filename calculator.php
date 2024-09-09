<?php
class calculator{
    private $result;
    public function add($a, $b){
        $this->result=0;
         $this->result=$a+$b;
         echo $this->result;
    }
    public function sub($a, $b){
        $this->result=0;
        $this->result=$a-$b;
        echo $this->result;
    }
}
$c=new calculator();
$c->add(4,3);
echo '<br>';
$c->sub(4,3);
?>