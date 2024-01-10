<?php

class Categoria
{
   protected $icona;
   protected $nome;

   public function __construct($_icona, $_nome)
   {
      $this->icona = $_icona;
      $this->nome = $_nome;
   }

   public function setNome($_nome)
   {
      $this->nome = $_nome;
   }

   public function getNome()
   {
      return $this->nome;
   }

   public function getIcona()
   {
      return $this->icona;
   }
}
