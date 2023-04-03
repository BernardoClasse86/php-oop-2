<?php
include_once __DIR__ . '/../models/products.php';

// prodotti cibo

$prodottoCibo1 = new Product('Paté morbido di pollo', new Category('Gatti', '<i class="fa-solid fa-cat"></i>', 'cucciolo'), new Articolo('Cibo', './img/umido-gatto-pollo.png', 0, 30));
$prodottoCibo2 = new Product('Crocchette di manzo', new Category('Gatti', '<i class="fa-solid fa-cat"></i>', ''), new Articolo('Cibo', './img/crocchette-gatto-manzo.jpg', 3.30, 250));
$prodottoCibo3 = new Product('Crocchette Bio di pollo', new Category('Gatti', '<i class="fa-solid fa-cat"></i>', 'adulto'), new Articolo('Cibo', './img/crocchette-gatto-bio-pollo.png', 5.75, 500));
$prodottoCibo4 = new Product('Crocchette di agnello', new Category('Cani', '<i class="fa-solid fa-dog"></i>', 'adulto'), new Articolo('Cibo', './img/crocchette-cane-agnello.png', 4.50, 375));
$prodottoCibo5 = new Product('Crocchette di pollo', new Category('Cani', '<i class="fa-solid fa-dog"></i>', 'cucciolo'), new Articolo('Cibo', './img/crocchette-cane-pollo.png', 3.50, 125));
$prodottoCibo6 = new Product('Crocchette di salmone', new Category('Cani', '<i class="fa-solid fa-dog"></i>', 'adulto'), new Articolo('Cibo', './img/crocchette-cane-salmone.png', 4.50, 350));

// var_dump($prodottoCibo1);

$prodottiCibo = [
    $prodottoCibo1,
    $prodottoCibo2,
    $prodottoCibo3,
    $prodottoCibo4,
    $prodottoCibo5,
    $prodottoCibo6,
];

// prodotti gioco

$prodottoGioco1 = new Product('Tiragraffi', new Category('Gatti', '<i class="fa-solid fa-cat"></i>', 'adulto'), new Articolo('Gioco', './img/tiragraffi-gatto.jpg', 56.50, 10));
$prodottoGioco2 = new Product('Gomitolo', new Category('Gatti', '<i class="fa-solid fa-cat"></i>', 'cucciolo'), new Articolo('Gioco', './img/gomitolo-gatto.jpg', 4.50, 50));
$prodottoGioco3 = new Product('Laser', new Category('Gatti', '<i class="fa-solid fa-cat"></i>', 'cucciolo'), new Articolo('Gioco', './img/laser-gatto.jpg', 22.90, 125));
$prodottoGioco4 = new Product('Pallina da tennis', new Category('Cani', '<i class="fa-solid fa-dog"></i>', 'adulto'), new Articolo('Gioco', './img/pallina-cane.png', 4.00, 200));
$prodottoGioco5 = new Product('Corda', new Category('Cani', '<i class="fa-solid fa-dog"></i>', 'adulto'), new Articolo('Gioco', './img/corda-cane.jpg', 5.00, 250));
$prodottoGioco6 = new Product('Osso giocattolo', new Category('Cani', '<i class="fa-solid fa-dog"></i>', 'cucciolo'), new Articolo('Gioco', './img/osso-cane.jpg', 3.50, 100));

$prodottiGioco = [
    $prodottoGioco1,
    $prodottoGioco2,
    $prodottoGioco3,
    $prodottoGioco4,
    $prodottoGioco5,
    $prodottoGioco6,
];

// prodotti cucce

$prodottoCuccia1 = new Product('', new Category('Gatti', '<i class="fa-solid fa-cat"></i>', 'adulto'), new Articolo('Cuccia', './img/cuccia-gatto-mucca.webp', 23.00, 750));
$prodottoCuccia2 = new Product('Cuccia Morbida', new Category('Gatti', '<i class="fa-solid fa-cat"></i>', 'adulto'), new Articolo('Cuccia', './img/cuccia-gatto-morbida.jpg', 19.50, 1000));
$prodottoCuccia3 = new Product('Cuccia Tenda', new Category('Gatti', '<i class="fa-solid fa-cat"></i>', ''), new Articolo('Cuccia', './img/cuccia-gatto-tenda.jpg', 49.90, 1250));
$prodottoCuccia4 = new Product('Cuccia in Legno', new Category('Cani', '<i class="fa-solid fa-dog"></i>', 'adulto'), new Articolo('Cuccia', './img/cuccia-cane-legno.webp', 99.90, 5000));
$prodottoCuccia5 = new Product('Cuccia in Plastica', new Category('Cani', '<i class="fa-solid fa-dog"></i>', 'cucciolo'), new Articolo('Cuccia', './img/cuccia-cane-plastica.jpg', 60.00, 3000));
$prodottoCuccia6 = new Product('Cuccia per interno', new Category('Cani', '<i class="fa-solid fa-dog"></i>', 'adulto'), new Articolo('Cuccia', './img/cuccia-cane-interno.jpg', 25.50, 200000));

// var_dump($prodottoCuccia2);

$prodottiCuccia = [
    $prodottoCuccia1,
    $prodottoCuccia2,
    $prodottoCuccia3,
    $prodottoCuccia4,
    $prodottoCuccia5,
    $prodottoCuccia6,
];
