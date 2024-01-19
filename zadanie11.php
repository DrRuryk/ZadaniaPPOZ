<?php
class Osoba
{
    private $imie;
    private $wiek;
    
    public function __construct($imie, $wiek)
    {
        $this->imie = $imie;
        $this->wiek = $wiek;
    }
    public function __toString()
    {
        return "Imię: " . $this->imie . ", Wiek: " . $this->wiek;
    }
    public function get_imie(){
        return $this->imie;
    }
    public function get_wiek(){
        return $this->wiek;
    }
}
class Pracownik extends Osoba
{
    private $pensja;
    private $stanowisko;
    
    public function __construct($pensja, $stanowisko)
    {
        parent::__construct($imie, $wiek);
        $this->pensja = $pensja;
        $this->stanowisko = $stanowisko;
    }
    public function get_pensja(){
        return $this->pensja;
    }
    public function get_stanowisko(){
        return $this->stanowisko;
    }
}

