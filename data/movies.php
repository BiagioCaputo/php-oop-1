<?php

require_once __DIR__ . '/../models/Movie.php';

//movies

$movie1 = new Movie(uniqid(), 'Arancia Meccanica','ita', '4/5', $director1,[$actor1, $actor2]);

$movie2 = new Movie(uniqid(), 'Ciccio Mongiello is back','ita', '5/5', $director2, [$actor3, $actor4]);

$movies = [$movie1, $movie2];