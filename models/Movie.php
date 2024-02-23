<?php

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
