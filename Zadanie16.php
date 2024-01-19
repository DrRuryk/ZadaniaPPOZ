<?php

class Kalkulator
{
    private $wynik;
    private $liczba1;
    private $liczba2;
    
    public function __construct($liczba1,$liczba2){
        $this->wynik = 0;
        $this->liczba1=$liczba1;
        $this->liczbn2=$liczba2;
    }
    public function dodaj(){
        $this->wynik = $this->$liczba1+$this->$liczba2;
    }
    public function odejmij(){
        $this->wynik = $this->$liczba1-$this->$liczba2;
    }
    public function pomnóż(){
        $this->wynik= $this->$liczba1*$this->$liczba2;
    }
    public function podziel(){
        if ($liczba2 != 0) {
            $this->wynik =$this->$liczba1/$this->$liczba2;
        } else {
            echo "Błąd: Nie można dzielić przez zero.\n";
        }
    }
        
    public function pobierzWynik(){
        return $this->wynik;
    }

}

// Przykład użycia
$kalkulator = new Kalkulator();

$kalkulator->dodaj(5);
echo "Wynik po dodaniu 5: " . $kalkulator->pobierzWynik() . "\n";

$kalkulator->odejmij(3);
echo "Wynik po odjęciu 3: " . $kalkulator->pobierzWynik() . "\n";
