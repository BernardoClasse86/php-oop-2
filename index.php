<?php

include __DIR__ . '/models/products.php';
include __DIR__ . '/models/dog.php';
include __DIR__ . '/models/dogs/cibo.php';
include __DIR__ . '/models/dogs/giochi.php';
include __DIR__ . '/models/dogs/cuccia.php';
include __DIR__ . '/models/cat.php';
include __DIR__ . '/models/cats/cibo.php';
include __DIR__ . '/models/cats/giochi.php';
include __DIR__ . '/models/cats/cuccia.php';

// include ends

//DOG PRODUCTS

// dog food

$dogFood1 = new DogFood('nome', 'descrizione', 'prezzo');
$dogFood1->setNome('Croccantini');
$dogFood1->setDesc('Alimento secco per cani');
$dogFood1->setCategoria('Cani');
$dogFood1->setPrezzo("7.00");
$dogFood1->setDisponibilita(true);
$dogFood1->setTaglia('Piccola');
$dogFood1->setRazza('Barboncino');

$dogFood2 = new DogFood('nome', 'descrizione', 'prezzo');
$dogFood2->setNome('Croccantini');
$dogFood2->setDesc('Alimento secco per cani');
$dogFood2->setCategoria('Cani');
$dogFood2->setPrezzo("7.00");
$dogFood2->setDisponibilita(true);
$dogFood2->setTaglia('Piccola');
$dogFood2->setRazza('Barboncino');

$dogFood3 = new DogFood('nome', 'descrizione', 'prezzo');
$dogFood3->setNome('Croccantini');
$dogFood3->setDesc('Alimento secco per cani');
$dogFood3->setCategoria('Cani');
$dogFood3->setPrezzo("7.00");
$dogFood3->setDisponibilita(true);
$dogFood3->setTaglia('Piccola');
$dogFood3->setRazza('Barboncino');

$dogFood4 = new DogFood('nome', 'descrizione', 'prezzo');
$dogFood4->setNome('Croccantini');
$dogFood4->setDesc('Alimento secco per cani');
$dogFood4->setCategoria('Cani');
$dogFood4->setPrezzo("7.00");
$dogFood4->setDisponibilita(true);
$dogFood4->setTaglia('Piccola');
$dogFood4->setRazza('Barboncino');

//d /dog food

//d dog toys

$dogToys1 = new DogToys('nome', 'descrizione', 'prezzo');
$dogToys1->setNome('Osso');
$dogToys1->setDesc('Osso di gomma sonoro');
$dogToys1->setCategoria('Cani');
$dogToys1->setPrezzo("6.00");
$dogToys1->setDisponibilita(true);
$dogToys1->setTaglia('Media');
$dogToys1->setRazza('Border Collie');

$dogToys2 = new DogToys('nome', 'descrizione', 'prezzo');
$dogToys2->setNome('Osso');
$dogToys2->setDesc('Osso di gomma sonoro');
$dogToys2->setCategoria('Cani');
$dogToys2->setPrezzo("6.00");
$dogToys2->setDisponibilita(true);
$dogToys2->setTaglia('Media');
$dogToys2->setRazza('Border Collie');

$dogToys3 = new DogToys('nome', 'descrizione', 'prezzo');
$dogToys3->setNome('Osso');
$dogToys3->setDesc('Osso di gomma sonoro');
$dogToys3->setCategoria('Cani');
$dogToys3->setPrezzo("6.00");
$dogToys3->setDisponibilita(true);
$dogToys3->setTaglia('Media');
$dogToys3->setRazza('Border Collie');

$dogToys4 = new DogToys('nome', 'descrizione', 'prezzo');
$dogToys4->setNome('Osso');
$dogToys4->setDesc('Osso di gomma sonoro');
$dogToys4->setCategoria('Cani');
$dogToys4->setPrezzo("6.00");
$dogToys4->setDisponibilita(true);
$dogToys4->setTaglia('Media');
$dogToys4->setRazza('Border Collie');

//d /dog toys

//d dog house

$dogHouse1 = new DogHouse('nome', 'descrizione', 'prezzo');
$dogHouse1->setNome('Casetta');
$dogHouse1->setDesc('Casetta in legno');
$dogHouse1->setCategoria('Cani');
$dogHouse1->setPrezzo("45.00");
$dogHouse1->setDisponibilita(true);
$dogHouse1->setTaglia('Grande');
$dogHouse1->setRazza('Certosino');

$dogHouse2 = new DogHouse('nome', 'descrizione', 'prezzo');
$dogHouse2->setNome('Casetta');
$dogHouse2->setDesc('Casetta in legno');
$dogHouse2->setCategoria('Cani');
$dogHouse2->setPrezzo("45.00");
$dogHouse2->setDisponibilita(true);
$dogHouse2->setTaglia('Grande');
$dogHouse2->setRazza('Certosino');

$dogHouse3 = new DogHouse('nome', 'descrizione', 'prezzo');
$dogHouse3->setNome('Casetta');
$dogHouse3->setDesc('Casetta in legno');
$dogHouse3->setCategoria('Cani');
$dogHouse3->setPrezzo("45.00");
$dogHouse3->setDisponibilita(true);
$dogHouse3->setTaglia('Grande');
$dogHouse3->setRazza('Certosino');

$dogHouse4 = new DogHouse('nome', 'descrizione', 'prezzo');
$dogHouse4->setNome('Casetta');
$dogHouse4->setDesc('Casetta in legno');
$dogHouse4->setCategoria('Cani');
$dogHouse4->setPrezzo("45.00");
$dogHouse4->setDisponibilita(true);
$dogHouse4->setTaglia('Grande');
$dogHouse4->setRazza('Certosino');

// /dog house

var_dump($DogFood1, $DogToys1, $DogHouse1);
// /DOG PRODUCTS

// CAT PRODUCTS

// cat food

$catFood1 = new CatFood('nome', 'descrizione', 'prezzo');
$catFood1->setNome('Manzo');
$catFood1->setDesc('Alimento secco per gatti');
$catFood1->setCategoria('Gatti');
$catFood1->setPrezzo("3.00");
$catFood1->setDisponibilita(true);
$catFood1->setSterilizzato(false);
$catFood1->setRazza('Persiano');

$catFood2 = new CatFood('nome', 'descrizione', 'prezzo');
$catFood2->setNome('Manzo');
$catFood2->setDesc('Alimento secco per gatti');
$catFood2->setCategoria('Gatti');
$catFood2->setPrezzo("3.00");
$catFood2->setDisponibilita(true);
$catFood2->setSterilizzato(false);
$catFood2->setRazza('Persiano');

$catFood3 = new CatFood('nome', 'descrizione', 'prezzo');
$catFood3->setNome('Manzo');
$catFood3->setDesc('Alimento secco per gatti');
$catFood3->setCategoria('Gatti');
$catFood3->setPrezzo("3.00");
$catFood3->setDisponibilita(true);
$catFood3->setSterilizzato(false);
$catFood3->setRazza('Persiano');

$catFood4 = new CatFood('nome', 'descrizione', 'prezzo');
$catFood4->setNome('Manzo');
$catFood4->setDesc('Alimento secco per gatti');
$catFood4->setCategoria('Gatti');
$catFood4->setPrezzo("3.00");
$catFood4->setDisponibilita(true);
$catFood4->setSterilizzato(false);
$catFood4->setRazza('Persiano');

// /cat food

// cat toys

$catToys1 = new CatToys('nome', 'descrizione', 'prezzo');
$catToys1->setNome('Gomitolo');
$catToys1->setDesc('Gomitolo di lana');
$catToys1->setCategoria('Gatti');
$catToys1->setPrezzo("8.00");
$catToys1->setDisponibilita(true);
$catToys1->setSterilizzato(true);
$catToys1->setRazza('Europeo');

$catToys2 = new CatToys('nome', 'descrizione', 'prezzo');
$catToys2->setNome('Gomitolo');
$catToys2->setDesc('Gomitolo di lana');
$catToys2->setCategoria('Gatti');
$catToys2->setPrezzo("8.00");
$catToys2->setDisponibilita(true);
$catToys2->setSterilizzato(true);
$catToys2->setRazza('Europeo');

$catToys3 = new CatToys('nome', 'descrizione', 'prezzo');
$catToys3->setNome('Gomitolo');
$catToys3->setDesc('Gomitolo di lana');
$catToys3->setCategoria('Gatti');
$catToys3->setPrezzo("8.00");
$catToys3->setDisponibilita(true);
$catToys3->setSterilizzato(true);
$catToys3->setRazza('Europeo');

$catToys4 = new CatToys('nome', 'descrizione', 'prezzo');
$catToys4->setNome('Gomitolo');
$catToys4->setDesc('Gomitolo di lana');
$catToys4->setCategoria('Gatti');
$catToys4->setPrezzo("8.00");
$catToys4->setDisponibilita(true);
$catToys4->setSterilizzato(true);
$catToys4->setRazza('Europeo');

// /cat toys

// cat house

$catHouse1 = new CatHouse('nome', 'descrizione', 'prezzo');
$catHouse1->setNome('Cuscino');
$catHouse1->setDesc('Cuscino Soffice');
$catHouse1->setCategoria('Gatti');
$catHouse1->setPrezzo("15.00");
$catHouse1->setDisponibilita(true);
$catHouse1->setSterilizzato(false);
$catHouse1->setRazza('Certosino');

$catHouse2 = new CatHouse('nome', 'descrizione', 'prezzo');
$catHouse2->setNome('Cuscino');
$catHouse2->setDesc('Cuscino Soffice');
$catHouse2->setCategoria('Gatti');
$catHouse2->setPrezzo("15.00");
$catHouse2->setDisponibilita(true);
$catHouse2->setSterilizzato(false);
$catHouse2->setRazza('Certosino');

$catHouse3 = new CatHouse('nome', 'descrizione', 'prezzo');
$catHouse3->setNome('Cuscino');
$catHouse3->setDesc('Cuscino Soffice');
$catHouse3->setCategoria('Gatti');
$catHouse3->setPrezzo("15.00");
$catHouse3->setDisponibilita(true);
$catHouse3->setSterilizzato(false);
$catHouse3->setRazza('Certosino');

$catHouse4 = new CatHouse('nome', 'descrizione', 'prezzo');
$catHouse4->setNome('Cuscino');
$catHouse4->setDesc('Cuscino Soffice');
$catHouse4->setCategoria('Gatti');
$catHouse4->setPrezzo("15.00");
$catHouse4->setDisponibilita(true);
$catHouse4->setSterilizzato(false);
$catHouse4->setRazza('Certosino');

// /cat house

var_dump($CatFood1, $CatToys1, $CatHouse1);
// /CAT PRODUCTS

$dogProducts = [
    $DogFood1,
    $DogFood2,
    $DogFood3,
    $DogFood4,
    $DogToys1,
    $DogToys2,
    $DogToys3,
    $DogToys4,
    $DogHouse1,
    $DogHouse2,
    $DogHouse3,
    $DogHouse4,
];

$catProducts = [
    $catFood1,
    $catFood2,
    $catFood3,
    $catFood4,
    $catToys1,
    $catToys2,
    $catToys3,
    $catToys4,
    $catHouse1,
    $catHouse2,
    $catHouse3,
    $catHouse4
];
