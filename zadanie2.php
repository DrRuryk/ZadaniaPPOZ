<?php
class Kolo
{
    public $promien;
    private $Pi = 3.14159265359;
    //metody
    function set_pr($promien){
        $this->promien = $promien;
    }
    function get_pow(){
        return $this->Pi*$this->promien**2;
    }
    function get_obw(){
        return 2*$this->Pi*$this->promien;
    }
}

$kolo1 = new Kolo();
$kolo1 ->set_pr(10);
echo $kolo1 ->get_obw();
?>