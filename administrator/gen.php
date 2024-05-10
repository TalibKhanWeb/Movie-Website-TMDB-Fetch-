<?php

$api_key = '8e2e95c3aa8286b064ed56a7c07ec2d5';
$url = "https://api.themoviedb.org/3/genre/movie/list?api_key={$api_key}";

$response = file_get_contents($url);
$genre_data = json_decode($response, true);


    $genres = $genre_data['genres'];
    foreach ($genres as $genre) {
        echo $genre['name'] . "<br>";
    }


?>
