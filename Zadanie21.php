<?php

class Powitanie
{
    private $imie;
    
    public function __construct($imie){
        $this->imie = $imie;
    }
    
    public function wyswietlPowitanie(){
        echo "Witajcie wszyscy, jestem {$this->imie}.\n";
    }
}
$obiektPowitanie = new Powitanie("Scott");
$obiektPowitanie->wyswietlPowitanie();
