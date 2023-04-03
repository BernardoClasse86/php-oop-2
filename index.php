<?php
include_once __DIR__ . '/db/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/36a89bf28f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Online pet shop</title>
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
                        <div class="px-6 pt-4 pb-2 bg-emerald-700 flex flex-wrap align-center justify-between">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $cibo->articolo->getArticolo() ?></span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $cibo->categoria->getIcona() ?></span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $cibo->categoria->getEta() ?></span>
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Prezzo: <?php echo $cibo->articolo->getPrezzo() ?></span>
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Peso: <?php echo $cibo->articolo->getPesoArticolo() ?></span>

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
                        <div class="px-6 pt-4 pb-2 bg-cyan-800 flex flex-wrap align-center justify-between">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $gioco->articolo->getArticolo() ?></span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $gioco->categoria->getIcona() ?></span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $gioco->categoria->getEta() ?></span>
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Prezzo: <?php echo $gioco->articolo->getPrezzo() ?></span>
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Peso: <?php echo $gioco->articolo->getPesoArticolo() ?></span>
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
                        <div class="px-6 pt-4 pb-2 bg-amber-950 flex flex-wrap align-center justify-between">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $cuccia->articolo->getArticolo() ?></span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $cuccia->categoria->getIcona() ?></span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2 mb-2"><?php echo $cuccia->categoria->getEta() ?></span>
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Prezzo: <?php echo $cuccia->articolo->getPrezzo() ?></span>
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Peso: <?php echo $cuccia->articolo->getPesoArticolo() ?></span>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>

    </div>

</body>

</html>