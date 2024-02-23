<?php

class Director
{
    public $id;
    public $first_name;
    public $last_name;

    public function __construct($id, $first_name, $last_name)
    {
        $this->id= $id;
        $this->first_name= $first_name;
        $this->last_name= $last_name;
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

}

class Actor 
{
    public $id;
    public $first_name;
     public $last_name;
    
    public function __construct($id, $first_name, $last_name)
        {
            $this->id= $id;
            $this->first_name= $first_name;
            $this->last_name= $last_name;
        }
    
}

class Movie
{
    public $id;
    public $title;
    public $language;
    public $rating;
    public $director;

    public function __construct($id, $title, $language, $rating, Director $director, array $actors)
    {
        $this->id= $id;
        $this->title= $title;
        $this->language= $language;
        $this->rating= $rating;
        $this->director= $director;
        $this->actors = $actors;
        
    }

    public function getDirectorName()
    {
        return $this->director->getFullName();
    }

}

//actors
$actor1 = new Actor(uniqid(), 'Malcolm', 'McDowell');
$actor2 = new Actor(uniqid(), 'Patrick', 'Magee');


$actor3 = new Actor(uniqid(),'Ciccio', 'Mongiello');
$actor4 = new Actor(uniqid(), 'Ciccio', 'junior');

//directors
$director1 = new Director(uniqid(), "Stanley", "Kubrick");

$director2 = new Director(uniqid(), "Marco", "Lanci");

//movies

$movie1 = new Movie(uniqid(), 'Arancia Meccanica','ita', '4/5', $director1,[$actor1, $actor2]);

$movie2 = new Movie(uniqid(), 'Ciccio Mongiello is back','ita', '5/5', $director2, [$actor3, $actor4]);

var_dump($movie1, $movie2);

