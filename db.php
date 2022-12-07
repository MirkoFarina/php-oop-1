<?php
require_once './class/Genres.php';
require_once './class/Movie.php';

$film_1 = new Movie('Slumberland', 'En',new Genres('Film per famiglie', 'Film per bambini', 'Avventure per famiglie'), 'Insieme a un ingobrante fuori legge ... ');

$film_1->rating('5');
$film_1->getPoster('https://pad.mymovies.it/filmclub/2022/08/122/locandina.jpg');

$film_2= new Movie('Troll', 'Nv', new Genres('Norvegese', 'Film d\'azione'));


$films = [$film_1, $film_2];

$film_3 = new Movie('Enola Holmes 2', 'En', new Genres('Drammi a sfondo sociale', 'Film per famiglie', 'Serie e Film storici'), 'Ora detective a tutti gli effetti come il frattelo maggiore scherlock ....');
$film_3->rating('3');
$film_3->getPoster('https://www.mbmusic.it/wp-content/uploads/2022/11/Enola-Holmes-2-Colonna-Sonora-Film-2022-Netflix.jpg');

$films[] = $film_3;


