<?php


interface resizable
{
    function resize($procent);
}

class kwadrat implements resizable{
    public $bok;
    
    function set_bok($bok){
        $this->bok=$bok;
    }
    function resize($procent){
        $this ->bok *=(1 + $procent / 100);
    }
    function get_bok(){
        return $this->bok;
    }
}
$kwadrat1 = new kwadrat();
$kwadrat1 ->set_bok(10);
$kwadrat1 ->resize(20);
echo $kwadrat1->get_bok();
?>