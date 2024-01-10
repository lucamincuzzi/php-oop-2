<?php
class Giocattolo extends Prodotto {
    private $materiale;

    public function setMateriale($_materiale){
        $this->materiale = $_materiale;
    }

    public function getMateriale(){
        return $this->materiale;
    }
}