<?php

class Genre
{
    public $generi;
};

class Movie
{
    public static $Type = 'Film';
    public $title;
    public $genre;
    public $runtime;
    public $actors;
    public $description;

    public function __construct(string $_title, string $_genre, string $_runtime, string  $_actors, string $_description)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->runtime = $_runtime;
        $this->actors = $_actors;
        $this->description = $_description;
    }
    public function getType()
    {
    }
};


$Terminator = new Movie('Terminator', 'Azione', '120', 'Pippo', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo maiores ratione nulla asperiores qui. Fugiat temporibus deleniti, debitis dicta quasi saepe corrupti sequi doloribus labore quisquam nostrum aperiam officiis consequatur. ');

var_dump($Terminator);
