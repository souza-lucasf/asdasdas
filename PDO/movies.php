<?php

$dsn = 'mysql:host=localhost;dbname=movie_dbbb';
$pdo = new PDO($dsn, 'root', '');





$results = $pdo->query('SELECT title, name FROM movies INNER JOIN directors ON movies.director_id = directors.id');

$movies = $results->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($movies);
echo '</pre>';


// $movies = $selectMovie->fetchAll(PDO::FETCH_ASSOC);








// foreach($movies as $movie){
//     $title = $movie['title'];
//     $prep ->execute();
// }