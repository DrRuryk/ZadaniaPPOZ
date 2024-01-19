<?php

class Walidacja
{
    public static function walidujEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }
    public static function walidujHaslo($haslo){
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';
        return preg_match($pattern, $haslo) === 1;
    }
    public static function walidujNumerTelefonu($numer){
        $pattern = '/^\d{3}[\s\-]?\d{3}[\s\-]?\d{3}$/';
        return preg_match($pattern, $numer) === 1;
    }
    
}