<?php

class LibraryItem
{
    protected $tytul;
    protected $rok;
    protected $dostepnosc = true;
    
    public function dodaj($tytul, $rok)
    {
        $this->tytul = $tytul;
        $this->rok = $rok;
    }
    
    public function wyporzyczenie()
    {
        $this->dostepnosc = false;
    }
    
    public function get_tytul()
    {
        return $this->tytul;
    }
    
    public function get_rok()
    {
        return $this->rok;
    }
    
    public function status()
    {
        return $this->dostepnosc;
    }
}

class Ksiazka extends LibraryItem
{
    private $autor;
    private $ISBN;
    
    public function dodaj($tytul, $rok, $autor, $ISBN)
    {
        parent::dodaj($tytul, $rok);
        $this->autor = $autor;
        $this->ISBN = $ISBN;
    }
    
    public function get_autor()
    {
        return $this->autor;
    }
    
    public function get_ISBN()
    {
        return $this->ISBN;
    }
}

class DVD extends LibraryItem
{
    private $rezyser;
    private $wytwornia;
    
    public function dodaj($tytul, $rok, $rezyser, $wytwornia)
    {
        parent::dodaj($tytul, $rok);
        $this->rezyser = $rezyser;
        $this->wytwornia = $wytwornia;
    }
}