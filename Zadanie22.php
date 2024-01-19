<?php

class Silnia
{
    public static function obliczSilnie($liczba)
    {
        if ($liczba < 0) {
            return "liczba nie możę być ujemna";
        } elseif ($liczba === 0) {
            return 1;
        } else {
            return $liczba * self::obliczSilnie($liczba - 1);
        }
    }
}
