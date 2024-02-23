<?php

//Classi
require_once __DIR__ . '/models/Actor.php';
require_once __DIR__ . '/models/Director.php';
require_once __DIR__ . '/models/Movie.php';

//Data
require __DIR__ . '/data/actors.php';
require __DIR__ . '/data/directors.php';
require __DIR__ . '/data/movies.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-movies</title>
</head>
<body>
    <header class="py-5">
        <h1 class="text-center">Movies</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($movies as $movie) : ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Featured
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $movie->title ?></li>
                            <li class="list-group-item"><?= $movie->language ?></li>
                            <li class="list-group-item"><?= $movie->rating ?></li>
                            <li class="list-group-item"><?= $movie->getDirectorName() ?></li>
                            <li class="list-group-item"></li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </main>
    
</body>
</html>

