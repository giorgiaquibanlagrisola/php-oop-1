<?php

    class Movie {

        public $title;
        public $releaseYear;
        public $genre;
        public $duration;
        public $director;

    }
    $firstMovie = new Movie();
    $firstMovie->title = 'The Lord of the Rings';

    var_dump($firstMovie);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <h1>
        PHP OOP 1
    </h1>
</body>
</html>