<?php
/* 
class Genre
{
    public $genre;
    public function __construct(string $genre)
    {
        $this->genre = $genre;
    }
}; */
/* 
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
}; */

/* 
var_dump($Terminator2);
*/
/* foreach ($MOVIES as $movie) {
    var_dump($movie);
}; */

require __DIR__  . '/Models/generi.php';
require __DIR__  . '/Models/movie.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>


    <div id="app">
        <header></header>
        <main>
            <div class="container-md">
                <div class="row justify-content-center">
                    <?php foreach ($MOVIES as $movie) : ?>
                        <div class="col-4">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body d-flex flex-column gap-2 border-bottom-1">
                                    <h3 class="card-title">
                                        <?= $movie->title ?>
                                    </h3>
                                    <span class="card-text border-bottom">
                                        Durata:
                                        <?= $movie->runtime ?>
                                    </span class="card-text border-bottom">
                                    <span>
                                        Genere:
                                        <?= $movie->genre->genre ?>
                                    </span>
                                    <p class="card-text border-bottom">
                                        Descrizione
                                        <?= $movie->description ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>

    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const {
            createApp
        } = Vue

        createApp({
            data() {
                return {}
            }
        }).mount('#app')
    </script>

</body>

</html>