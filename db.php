<?php
require_once './class/Genres.php';
require_once './class/Movie.php';

$film_1 = new Movie('Slumberland', 'En',new Genres('Film per famiglie', 'Film per bambini', 'Avventure per famiglie'), 'Insieme a un ingobrante fuori legge ... ');

$film_1->rating('5');
$film_1->getPoster('https://pad.mymovies.it/filmclub/2022/08/122/locandina.jpg');

$film_2= new Movie('Troll', 'Nv', new Genres('Norvegese', 'Film d\'azione'));

$films = [$film_1, $film_2];


