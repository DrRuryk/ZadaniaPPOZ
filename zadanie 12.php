<?php
interface Comparable{
    public function porownaj($cena);
}
class Produkt implements Comparable
{
    private $nazwa;
    private $cena;
    
    public function __construct($nazwa, $cena)
    {
        $this->nazwa = $nazwa;
        $this->cena = $cena;
    }
    public function get_Nazwa()
    {
        return $this->nazwa;
    }
    
    public function get_Cena()
    {
        return $this->cena;
    }
    public function porownaj($other)
    {
            if ($this->cena < $other->getCena()) {
                return -1;
            } elseif ($this->cena > $other->getCena()) {
                return 1;
            } else {
                return 0;
            }
    }
}

