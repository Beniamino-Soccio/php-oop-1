<?php 

    class Movie {
        public $name;
        public $vote;
        public $filmDirector;
        public $year;
        public $imgUrl;

        function __construct($_name, $_vote, $_filmDirector, $_year, $_imgUrl, ){
            $this->name = $_name;
            $this->vote = $_vote;
            $this->filmDirector = $_filmDirector;
            $this->year = $_year;
            $this->imgUrl = $_imgUrl;
        }
    }
    $firstFilm = new Movie("Inception", "Christopher Nolan", 4.65, "2010", "https://images.everyeye.it/img-notiziealt/inception-warner-bros-svela-data-atteso-ritorno-cinema-italiani-v3-462812-350x16.jpg");
    $secondFilm = new Movie("Tenet", "Christopher Nolan", 3.45, "2020", "https://www.labottegadihamlin.it/wp-content/uploads/2020/08/tenet-locandina-scaled-870x500-1598694906.jpg");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-movie</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <h1 class="fw-bold text-center p-4">PHP OOP MOVIE</h1>
        <div class="d-flex justify-content-center gap-4">
            <div class="card" style="width: 18rem;">
                <img src="<?= $firstFilm->imgUrl ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="text-center fw-bold">
                        Titolo: <?= $firstFilm->name?>
                    </h5>
                    <p class="card-text text-center mb-0">Regista: <?= $firstFilm->filmDirector ?></p>
                    <p class="card-text text-center mb-0">Voto: <?= $firstFilm->vote ?></p>
                    <p class="card-text text-center">Anno: <?= $firstFilm->year ?></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="<?= $secondFilm->imgUrl ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="text-center fw-bold">
                        Titolo: <?= $secondFilm->name ?>
                    </h5>
                    <p class="card-text text-center mb-0">Regista: <?= $secondFilm->filmDirector ?></p>
                    <p class="card-text text-center mb-0">Voto: <?= $secondFilm->vote ?></p>
                    <p class="card-text text-center">Anno: <?= $secondFilm->year ?></p>
                </div>
            </div>
        </div>    
    </main>
</body>
</html>