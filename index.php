<?php
 require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

    <link rel="stylesheet" href="./css/style.css">

    <title>Class Movies</title>
</head>

<body>
    <div class="container my-5">
        <div class="row row-cols-3">
            <?php foreach($films as $film): ?>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $film->poster ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $film->title ?></h5>
                        <p class="card-text"><?php echo $film->getDescription() ?></p>
                        <p class="card-text"><?php echo $film->getRating() ?></p>
                    </div>
                    <ul>
                        <?php foreach($film->genres as $genres) : ?>
                        <li class="list-group-item"><?php echo $genres ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>