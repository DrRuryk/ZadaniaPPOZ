<?php

class Student
{
    private $imie;
    private $wiek;
    private $klasa; 
    
    public function dodaj(){
        $this->imie=$imie;
        $this->wiek=$wiek;
        $this->klasa=$klasa;
    }
    public function get_imie(){
        return $this->imie;
    }
    public function get_wiek(){
        return $this->wiek;
    }
    public function get_klasa(){
        return $this->klasa;
    }
}

