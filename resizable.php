<?php
interface resizable{
    function resize($s);
}
class square implements resizable{
    public $size;
    function __construct($s){
        $this->size=$s;
    }
    function resize($value){
        return ($this->size*($value/100));
    }
}
$s=new square(100);
echo 'the size of square is: '. $s->size;
echo '<br>';
echo 'the resized square is: '.$s->resize(50);
?>