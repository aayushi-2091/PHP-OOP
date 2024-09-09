<?php
class rectangle{
    public $length;
    public $width;
    public $a;
    public $p;
    public function area($length, $width){
        $this->length=$length;
        $this->width=$width;
        $a=$length*$width;
        return $a;
    }
    public function perimeter($length, $width){
        $this->length=$length;
        $this->width=$width;
        $p=(2*($length+$width));
        return $p;
    }
}
$rec=new rectangle();
echo 'Area is: '. $rec->area(2,3);
echo '<br>';
echo 'Perimeter is: '. $rec->perimeter(2,3);
?>