<?php
class bank_account{
    public $acc,$bal,$amount;
    function __construct($a, $b){
        $this->acc=$a;
        $this->bal=$b;
    }
    function deposit($amt){
        $this->amount=$amt;
        if($this->amount>0){
           return $this->bal+=$this->amount;
        }
    }
    function withdraw($amt){
        $this->amount=$amt;
        if($this->amount>0 && $this->amount<$this->bal){
           return $this->bal-=$this->amount;
        }
    }
}
$p=new bank_account('AC123455556', 50000);
echo $p->deposit(4000);
echo '<br>';
echo $p->withdraw(5000);
?>