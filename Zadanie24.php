<?php

class RoznicaDat
{
    private $data1;
    private $data2;
    
    public function __construct($data1, $data2)
    {
        $this->data1 = new DateTime($data1);
        $this->data2 = new DateTime($data2);
    }
    
    public function obliczRoznice()
    {
        $roznica = $this->data1->diff($this->data2);
        
        $lata = $roznica->y;
        $miesiace = $roznica->m;
        $dni = $roznica->d;
        
        return "Różnica: $lata lat, $miesiace miesięcy, $dni dni";
    }
}