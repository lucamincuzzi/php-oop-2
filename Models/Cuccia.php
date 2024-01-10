<?php
class Cuccia extends Prodotto {
    private $tipologia;

    public function setTipologia($_tipologia){
        $this->tipologia = $_tipologia;
    }

    public function getTipologia(){
        return $this->tipologia;
    }
}