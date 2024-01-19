<?php

class pojazd
{
    public $marka;
    public $model;
    public $rok;
    
    function setall($marka,$model,$rok){
        $this->marka = $marka;
        $this->model = $model;
        $this->rok = $rok;
    }
    function get_marka(){
        return $this->marka;
    }
    function get_model(){
        return $this->model;
    }
    function get_rok(){
    return $this->rok;
    }
}

$camaro = new pojazd();
$camaro->setall("Camaro", "SS", 1969);
$camaro->getall();
