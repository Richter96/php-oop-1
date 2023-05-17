<?php

class Movie
{
    public $title;
    public $genre;
    public $runtime;
    public $actors;
    public $description;

    public function __construct(string $_title, string $_runtime, string  $_actors, string $_description, Genre $_genre)
    {
        $this->title = $_title;
        $this->runtime = $_runtime;
        $this->actors = $_actors;
        $this->description = $_description;
        $this->genre = $_genre;
    }

    public function getMovieDetail()
    {
        return "Title: $this->title, Duration: $this->runtime, Actors: $this->actors, Description: $this->description, Genre: $this->genre ";
    }
};




$MOVIES = [
    new Movie('Terminator', '120', 'Pippo', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo maiores ratione nulla asperiores qui. Fugiat temporibus deleniti, debitis dicta quasi saepe corrupti sequi doloribus labore quisquam nostrum aperiam officiis consequatur.', new Genre('azione')),
    new Movie('Terminator 2', '130', 'Pippo 2 la vendetta', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo maiores ratione nulla asperiores qui. Fugiat temporibus deleniti, debitis dicta quasi saepe corrupti sequi doloribus labore quisquam nostrum aperiam officiis consequatur.', new Genre('realtà')),
];
