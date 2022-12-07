<?php
require_once './class/Genres.php';
require_once './class/Movie.php';

$film_1 = new Movie('Slumberland', 'En',new Genres('Film per famiglie', 'Film per bambini', 'Avventure per famiglie'), 'Insieme a un ingobrante fuori legge ... ');

$film_1->getRating('5');

var_dump($film_1);
var_dump($film_1->rating);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Movies</title>
</head>

<body>
    <div>

    </div>
</body>

</html>