<?php

class Plik
{
    private $nazwa;
    private $rozmiar;
    
    public function __construct($nazwa, $rozmiar)
    {
        $this->nazwa = $nazwa;
        $this->rozmiar = $rozmiar;
    }
    
    public function getNazwa()
    {
        return $this->nazwa;
    }
    
    public function getRozmiar()
    {
        return $this->rozmiar;
    }
    public static function obliczCałkowityRozmiar(array $pliki)
    {
        $całkowityRozmiar = 0;
        
        foreach ($pliki as $plik) {
            if ($plik instanceof Plik) {
                $całkowityRozmiar += $plik->getRozmiar();
            } else {
            }
        }
        
        return $całkowityRozmiar;
    }
}
$plik1 = new Plik("plik1.bmp", 1024);
$plik2 = new Plik("plik2.txt", 2048);
$całkowityRozmiar = Plik::obliczCałkowityRozmiar([$plik1, $plik2]);
echo "Całkowity rozmiar plików: " . $całkowityRozmiar . " bajtów\n";