<?php


class Movie
{
    public $title;
    public $genre;
    public $runtime;
    public $actors;
    public $description;

    public function __construct($_title, $_genre, $_runtime, $_actors, $_description)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->runtime = $_runtime;
        $this->actors = $_actors;
        $this->description = $_description;
    }
}
