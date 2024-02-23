<?php

class Movie
{
    public $id;
    public $title;
    public $language;
    public $rating;

    public function __construct($id, $title, $language, $rating)
    {
        $this->id= $id;
        $this->title= $title;
        $this->language= $language;
        $this->rating= $rating;
    }

}

$movie1 = new Movie('1', 'Arancia Meccanica','ita', '4/5');

$movie2 = new Movie('2', 'Ciccio Mongiello is back','ita', '5/5');

var_dump($movie1, $movie2);

