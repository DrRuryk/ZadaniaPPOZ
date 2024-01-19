<?php

function konwertujNaDate($ciagZnakow)
{
    $format = 'd-m-Y';
    $dateTime = DateTime::createFromFormat($format, $ciagZnakow);
    if ($dateTime instanceof DateTime) {
        return $dateTime->format('Y-m-d');
    } else {
        return "Błąd: Nieprawidłowy format daty.";
    }
}
