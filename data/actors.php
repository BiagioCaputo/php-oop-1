<?php
require_once __DIR__ . '/../models/Actor.php';
//actors
$actor1 = new Actor(uniqid(), 'Malcolm', 'McDowell');
$actor2 = new Actor(uniqid(), 'Patrick', 'Magee');


$actor3 = new Actor(uniqid(),'Ciccio', 'Mongiello');
$actor4 = new Actor(uniqid(), 'Ciccio', 'junior');