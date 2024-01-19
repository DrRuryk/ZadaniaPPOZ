<?php

class Matematyka
{
    public static function dodaj($a, $b)
    {
        return $a + $b;
    }
    
    public static function odejmij($a, $b)
    {
        return $a - $b;
    }
    
    public static function pomnóż($a, $b)
    {
        return $a * $b;
    }
}

$wynikDodawania = Matematyka::dodaj(5, 3);
echo "Wynik dodawania: " . $wynikDodawania;