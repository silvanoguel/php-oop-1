 <!-- 
    - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->

<?php

require_once __DIR__ . "/Models/movie.php";


$christopher_nolan = new Movie("Interstellar", "2014", "English", "https://movies.gamesource.it/wp-content/uploads/sites/2/2014/09/Interstellar-locandina-internazionale.jpg");
$clint_eastwood = new Movie("Million Dollar Baby", "2004", "English", "https://www.locchiodelcineasta.com/wp-content/uploads/2022/07/million-dollar-baby-poster.webp?ezimgfmt=ng%3Awebp%2Fngcb44%2Frs%3Adevice%2Frscb44-2");

$movies = [$christopher_nolan, $clint_eastwood];

// echo ($christopher_nolan->getMovieData());
// echo ("<br>");
// echo ($clint_eastwood->getMovieData());

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>OOP MOVIES</title>
    </head>
    <body>
        <div class="container my-5">

            <div class="row">

                <?php foreach ($movies as $movie) : ?>
                    <div class="col">
                        <div class="card mx-auto h-100" style="width: 18rem;">
                            <img src="<?= $movie->img ?>" class="card-img-top img-fluid h-75" alt="<?= $movie->title ?>">
                            <div class="card-body">
                                <h3 class="card-title"><?= $movie->title ?></h3>
                                <h6>YEAR: <?= $movie->year ?></h6>
                                <h6>LANGUAGE: <?= $movie->language ?></h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                
            </div>

        </div>
        
    </body>

</html>