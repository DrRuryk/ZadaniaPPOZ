<?php

class KontoBankowe
{
    private $numerKonta;
    private $saldo;
    
    public function __construct($numerKonta, $saldo = 0)
    {
        $this->numerKonta = $numerKonta;
        $this->saldo = $saldo;
    }
    
    public function wpłacPieniądze($kwota)
    {
        if ($kwota > 0) {
            $this->saldo += $kwota;
        } else {
            echo "Błąd: Kwota wpłaty musi być większa niż 0.";
        }
    }
    
    public function wypłaćPieniądze($kwota)
    {
        if ($kwota > 0 && $kwota <= $this->saldo) {
            $this->saldo -= $kwota;
        } elseif ($kwota <= 0) {
            echo "Błąd: Kwota wypłaty musi być większa niż 0.\n";
        } else {
            echo "Błąd: Brak wystarczających środków na koncie.\n";
        }
    }
 
}