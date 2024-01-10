<?php

trait Peso {
    private $peso;

    public function setPeso($_peso) {
        if($_peso > 0) {
            $this->peso = $_peso;
        } else {
            throw new Exception("Peso invalido");
        }
    }

    public function getPeso() {
        return $this->peso . 'g';
    }
}