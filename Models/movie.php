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
};
