<?php
class Prodotto
{
    protected $foto;
    protected $categoria;
    protected $nome;
    protected $prezzo;

    public function __construct($_foto, Categoria $_categoria, $_nome, $_prezzo)
    {
        $this->foto = $_foto;
        $this->categoria = $_categoria;
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
    
    public function getFoto()
    {
        return $this->foto;
    }

    public function getIconaCategoria()
    {
        return $this->categoria->getIcona();
    }

    public function getNomeCategoria()
    {
        return $this->categoria->getNome();
    }

    public function getNome()
    {
        return $this->nome;
    }

}
