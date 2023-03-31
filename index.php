<?php

include_once __DIR__ . '/models/products.php';

// prodotti cibo

$prodottoCibo1 = new Product('Paté morbido di pollo', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), new Articolo('Cibo', './img/umido-gatto-pollo.png', '2.50€'));
$prodottoCibo2 = new Product('Crocchette di manzo', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), new Articolo('Cibo', './img/crocchette-gatto-manzo.jpg', '3.30€'));
$prodottoCibo3 = new Product('Crocchette Bio di pollo', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), new Articolo('Cibo', './img/crocchette-gatto-bio-pollo.png', '5.75€'));
$prodottoCibo4 = new Product('Crocchette di agnello', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), new Articolo('Cibo', './img/crocchette-cane-agnello.png', '4.00€'));
$prodottoCibo5 = new Product('Crocchette di pollo', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), new Articolo('Cibo', './img/crocchette-cane-pollo.png', '3.00€'));
$prodottoCibo6 = new Product('Crocchette di salmone', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), new Articolo('Cibo', './img/crocchette-cane-salmone.png', '4.50€'));

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

$prodottoGioco1 = new Product('Tiragraffi', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), new Articolo('Gioco', './img/tiragraffi-gatto.jpg', '56.50€'));
$prodottoGioco2 = new Product('Gomitolo', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), new Articolo('Gioco', './img/gomitolo-gatto.jpg', '4.50€'));
$prodottoGioco3 = new Product('Laser', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), new Articolo('Gioco', './img/laser-gatto.jpg', '22.90€'));
$prodottoGioco4 = new Product('Pallina da tennis', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), new Articolo('Gioco', './img/pallina-cane.png', '4.00€'));
$prodottoGioco5 = new Product('Corda', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), new Articolo('Gioco', './img/corda-cane.jpg', '5.00€'));
$prodottoGioco6 = new Product('Osso giocattolo', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), new Articolo('Gioco', './img/osso-cane.jpg', '3.50€'));

$prodottiGioco = [
    $prodottoGioco1,
    $prodottoGioco2,
    $prodottoGioco3,
    $prodottoGioco4,
    $prodottoGioco5,
    $prodottoGioco6,
];

// prodotti cucce

$prodottoCuccia1 = new Product('Cuccia Mucca', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), new Articolo('Cuccia', './img/cuccia-gatto-mucca.webp', '23.00€'));
$prodottoCuccia2 = new Product('Cuccia Morbida', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), new Articolo('Cuccia', './img/cuccia-gatto-morbida.jpg', '19.50€'));
$prodottoCuccia3 = new Product('Cuccia Tenda', new Category('Gatti', '<i class="fa-solid fa-cat"></i>'), new Articolo('Cuccia', './img/cuccia-gatto-tenda.jpg', '49.90€'));
$prodottoCuccia4 = new Product('Cuccia in Legno', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), new Articolo('Cuccia', './img/cuccia-cane-legno.webp', '149.90€'));
$prodottoCuccia5 = new Product('Cuccia in Plastica', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), new Articolo('Cuccia', './img/cuccia-cane-plastica.jpg', '60.00€'));
$prodottoCuccia6 = new Product('Cuccia per interno', new Category('Cani', '<i class="fa-solid fa-dog"></i>'), new Articolo('Cuccia', './img/cuccia-cane-interno.jpg', '25.00€'));

$prodottiCuccia = [
    $prodottoCuccia1,
    $prodottoCuccia2,
    $prodottoCuccia3,
    $prodottoCuccia4,
    $prodottoCuccia5,
    $prodottoCuccia6,
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/36a89bf28f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>

    <div class="container mx-auto">

        <h1 class="text-4xl text-center mb-8">Prodotti per Animali</h1>

        <div class="container mx-auto p-2 mb-8">

            <h3 class="text-3xl text-center mb-4 text-amber-800">Alimenti per Animali</h3>

            <div class="flex flex-row flex-wrap gap-6 justify-center">
                <?php foreach ($prodottiCibo as $cibo) {
                ?>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg basis-1/3">
                        <img style="height: 300px;" class="mx-auto w-full" src="<?php echo $cibo->articolo->getImmagine() ?>" alt="alimenti per animali">
                        <div class="px-6 py-4 bg-emerald-700 text-white">
                            <div class="font-bold text-xl mb-2"><?php echo $cibo->getNome() ?></div>
                        </div>
                        <div class="px-6 pt-4 pb-2 bg-emerald-700">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $cibo->articolo->getArticolo() ?></span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $cibo->categoria->getIcona() ?></span>
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"><?php echo $cibo->articolo->getPrezzo() ?></span>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>

        <div class="container mx-auto p-2 mb-8">

            <h3 class="text-3xl text-center mb-4 text-amber-800">Giochi per Animali</h3>

            <div class="flex flex-row flex-wrap gap-6 justify-center">
                <?php foreach ($prodottiGioco as $gioco) {
                ?>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg basis-1/3">
                        <img style="height: 300px;" class="mx-auto w-full" src="<?php echo $gioco->articolo->getImmagine() ?>" alt="giochi per animali">
                        <div class="px-6 py-4 bg-cyan-800 text-white">
                            <div class="font-bold text-xl mb-2"><?php echo $gioco->getNome() ?></div>
                        </div>
                        <div class="px-6 pt-4 pb-2 bg-cyan-800">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $gioco->articolo->getArticolo() ?></span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $gioco->categoria->getIcona() ?></span>
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"><?php echo $gioco->articolo->getPrezzo() ?></span>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>

        <div class="container mx-auto p-2 mb-8">

            <h3 class="text-3xl text-center mb-4 text-amber-800">Cucce per Animali</h3>

            <div class="flex flex-row flex-wrap gap-6 justify-center">
                <?php foreach ($prodottiCuccia as $cuccia) {
                ?>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg basis-1/3">
                        <img style="height: 300px;" class="mx-auto w-full" src="<?php echo $cuccia->articolo->getImmagine() ?>" alt="giochi per animali">
                        <div class="px-6 py-4 bg-amber-950 text-white">
                            <div class="font-bold text-xl mb-2"><?php echo $cuccia->getNome() ?></div>
                        </div>
                        <div class="px-6 pt-4 pb-2 bg-amber-950">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $cuccia->articolo->getArticolo() ?></span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $cuccia->categoria->getIcona() ?></span>
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-white mr-2 mb-2"><?php echo $cuccia->articolo->getPrezzo() ?></span>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>

    </div>

</body>

</html>