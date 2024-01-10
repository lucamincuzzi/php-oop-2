<?php
class Prodotto
{
    protected $foto;
    protected $categoria;
    protected $nome;
    protected $prezzo;

    public function __construct($_foto, $_categoria, $_nome, $_prezzo)
    {
        $this->foto = $_foto;
        $this->categoria = $_categoria;
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
}