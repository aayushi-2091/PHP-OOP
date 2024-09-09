<?php
class math{
    public static function add($a, $b){
        echo 'Sum is: '.$a+$b;
    }
    public static function sub($a, $b){
        echo 'Substraction is: '.abs($a-$b);
    }
    public static function mul($a, $b){
        echo 'Multiplication is: '.$a*$b;
    }
}
math::add(4,3);
echo '<br>';
math::sub(3,4);
echo '<br>';
math::mul(3,4);
?>