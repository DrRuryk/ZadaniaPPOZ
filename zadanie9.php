<?php

abstract class Zwierze
{
    protected $nazwa;
    public function dodaj($nazwa){
        $this->nazwa=$nazwa;
    }
    abstract public function jesc();
    abstract public function wydawacDzwieki();
}

class Pies extends Zwierze{
    public function jesc(){
        echo $this->nazwa."je karme";
    }
    public function wydawacDzwieki(){
        echo $this->nazwa."szczeka";
    }
}
class Kot extends Zwierze{
    public function jesc(){
        echo $this->nazwa."je mysze";
    }
    public function wydawacDzwieki(){
        echo $this->nazwa."mialczy";
    }
}
class ptak extends Zwierze{
    public function jesc(){
        echo $this->nazwa."je ziarno";
    }
    public function wydawacDzwieki(){
        echo $this->nazwa."spiewa";
    }
}