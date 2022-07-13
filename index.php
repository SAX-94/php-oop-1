<?php

require_once __DIR__ . "/class/Movie.php";

$movies = [
    new Movie(
        "Doctor Strange: In the Multiverse of Madness",
        ["Action", "Horror", "Based on comicbook", "Adventure", "Sci-Fi"],
        126,
        "Sam Raimi",
        "To restore a world where everything is changing, Strange seeks help from his ally Wong, the Sorcerer Supreme, and the Avengers' most powerful Scarlet Witch, Wanda. But a terrible threat looms over humanity and the entire universe that no longer can be done by their power alone. Even more surprising, the greatest threat in the universe looks exactly like Doctor Strange.",
        8.3
    ),
    new Movie(
        "The Batman",
        ["Action", "Thriller", "Based on comicbook", "Drama", "Adventure"],
        176,
        "Matt Reeves",
        "Batman ventures into Gotham City's underworld when a sadistic killer leaves behind a trail of cryptic clues. As the evidence begins to lead closer to home and the scale of the perpetrator's plans become clear, he must forge new relationships, unmask the culprit and bring justice to the abuse of power and corruption that has long plagued the metropolis.",
        9.5
    )
]


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <title>PHP Class - Movie</title>
</head>

<body>
    <?php ?>
    <div class="container">
        <?php foreach ($movies as $movie) : ?>
            <div class="movie my-5">
                <h1><?php echo $movie->getTitle() ?></h1>
                <p>
                    <b>Genres</b>: <?php foreach ($movie->getGenres() as $genre) echo " $genre," ?><br>
                    <b>Runtime</b>: <?php echo $movie->getRuntimeMinutes() ?> minutes<br>
                    Directed by <b><?php echo $movie->getDirectorsName() ?></b>
                </p>
                <p><b>Plot</b>:<br><?php echo $movie->getPlot() ?></p>
                <p><b>Rating</b>: <?php echo $movie->getRating() ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>