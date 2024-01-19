<?php

<?php

class KoszykZakupowy
{
    private $przedmioty;
    private $suma;
    
    public function __construct(){
        $this->przedmioty = [];
        $this->suma = 0;
    }
    public function dodajPrzedmiot($nazwa, $cena){
        $this->przedmioty[] = ['nazwa' => $nazwa, 'cena' => $cena];
        $this->suma += $cena;
    }
    public function obliczSumę(){
        return $this->suma;
    }
    public function pokazKoszyk(){
        echo "Zawartość koszyka:\n";
        foreach ($this->przedmioty as $przedmiot) {
            echo "- " . $przedmiot['nazwa'] . " (Cena: " . $przedmiot['cena'] . " zł)\n";
        }
        echo "Całkowita suma: " . $this->suma . " zł\n";
    }
}

$koszyk = new KoszykZakupowy();

$koszyk->dodajPrzedmiot("Telefon", 1200);
$koszyk->dodajPrzedmiot("Laptop", 2500);

$koszyk->pokazKoszyk();


