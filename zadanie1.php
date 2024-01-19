<?php

class prostokat
{
    //wlasciwosci
    public $dlugosc;
    public $szerokosc;
    private $dwa = 2;
    //metody
    function set_dl($dlugosc){
        $this-> dlugosc = $dlugosc;
    }
    function set_szer($szerokosc){
        $this-> szerokosc = $szerokosc;
    }
    
    function get_obwod(){
        return 2*$this->dlugosc+2*$this->szerokosc;
    }
    function get_pole(){
        return $this->dlugosc*$this->szerokosc;
    }
}

$kwadrat = new prostokat();
$kwadrat-> set_dl(20);
$kwadrat-> set_szer(20);
echo $kwadrat->get_obwod();
?>

