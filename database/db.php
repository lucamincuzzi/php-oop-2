<?php
require_once __DIR__ . '/../Models/Categoria.php';
require_once __DIR__ . '/../Models/Prodotto.php';
require_once __DIR__ . '/../Models/Cibo.php';
require_once __DIR__ . '/../Models/Cuccia.php';
require_once __DIR__ . '/../Models/Giocattolo.php';

$cane = new Categoria('fa-solid fa-bone', 'Cani');

$gatto = new Categoria('fa-solid fa-cat', 'Gatti');

$crocchette_cani = new Cibo('crocchette-per-cani.png', $cane, 'Crocchette Krocs', 10);

$monge_umido_gatti = new Cibo('cibo-umido-gatti-monge.jpg', $gatto, 'Monge Tonno & Pollo', 8);

try {
    $crocchette_cani->setPeso(50);
    $monge_umido_gatti->setPeso(40);
} catch (Exception $e) {
    echo "Peso non valido!";
}

$prodotti = [
    $crocchette_cani,
    $monge_umido_gatti,
];