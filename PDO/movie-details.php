<?php

$dsn = 'mysql:host=localhost;dbname=movie_dbbb';
$pdo = new PDO($dsn, 'root', '');


$results = $pdo->query('SELECT *, name FROM movies INNER JOIN directors ON movies.director_id = directors.id');

$movies = $results->fetchAll(PDO::FETCH_ASSOC);


foreach ($movies as $movie) {
    echo "Title: ".$movie['title'] . '<br>';
    echo "Views: ".$movie['views'] . '<br>';
    echo "<img style=width:200px; src=" . $movie['poster'] .  "><br><hr>";

}