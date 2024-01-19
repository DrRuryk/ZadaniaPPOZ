<?php

lass Kalkulator
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
$mycalc = new Kalkulator(12, 6);
echo "Dodawanie: " . $mycalc->dodaj() . "\n";       
echo "Odejmowanie: " . $mycalc->odejmij() . "\n";  
echo "Mnożenie: " . $mycalc->pomnóż() . "\n";      
echo "Dzielenie: " . $mycalc->podziel() . "\n";    