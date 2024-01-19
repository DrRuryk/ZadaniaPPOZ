<?php

class Sortowanie
{
    public static function sortujTablice(array $tablica)
    {
        sort($tablica);
        return $tablica;
    }
}
$tablicaLiczb = array(11, -2, 4, 35, 0, 8, -9);
$posortowanaTablica = Sortowanie::sortujTablice($tablicaLiczb);
print_r($posortowanaTablica);
