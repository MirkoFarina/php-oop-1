<?php
require_once './class/Genres.php';
require_once './class/Movie.php';

$film_1 = new Movie('Slumberland', 'En',new Genres('Film per famiglie', 'Film per bambini', 'Avventure per famiglie'), 'Insieme a un ingobrante fuori legge ... ');

$film_1->getRating('5');

var_dump($film_1);
var_dump($film_1->rating);

$film_2= new Movie('Troll', 'Nv', new Genres('Norvegese', 'Film d\'azione'));
var_dump($film_2);
