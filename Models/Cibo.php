<?php
class Cibo extends Prodotto
{
    private $data_scadenza;

    public function setDataScadenza($_data_scadenza)
    {
        $this->data_scadenza = $_data_scadenza;
    }

    public function getDataScadenza()
    {
        return $this->data_scadenza;
    }
}
