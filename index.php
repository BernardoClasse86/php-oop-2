<?php

include __DIR__ . '/models/products.php';
include __DIR__ . '/models/dog.php';
include __DIR__ . '/models/cat.php';


$DogProduct1 = new DogProduct('taglia', 'razza');
$DogProduct1->setNome('Crocchette verdure');
$DogProduct1->setDesc('Alimento secco cani');
$DogProduct1->setCategoria('Cani');
$DogProduct1->setPrezzo("4.50");
$DogProduct1->setDisponibilita(false);
$DogProduct1->setRazza('Alano');
$DogProduct1->setTaglia('Grande');

$CatProduct2 = new CatProduct('taglia', 'razza');
$CatProduct2->setNome('Crocchette manzo');
$CatProduct2->setDesc('Alimento secco gatti');
$CatProduct2->setCategoria('Gatti');
$CatProduct2->setPrezzo("3.00");
$CatProduct2->setDisponibilita(true);
$CatProduct2->setRazza('Persiano');
$CatProduct2->setSterilizzato('Piccolo');

var_dump($DogProduct1, $CatProduct2);
