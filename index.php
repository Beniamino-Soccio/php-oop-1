<!-- 
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.

Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.

Possiamo ad esempio organizzare il codice
-creando un file dedicato ai dati (tipo gli array di oggetti) che potremmo chiamare db.php
-mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare classes/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. 
-->

<?php 

    class Movie {
        public $name;
        public $vote;
        public $filmDirector;
        public $year;
        public $imgUrl;

    }
    $firstFilm = new Movie();
    $url = $firstFilm->imgUrl = "https://pad.mymovies.it/filmclub/2009/03/027/immpg25.jpg" 
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

        <div class="card" style="width: 18rem;">
            <img src="<?= $url ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="text-center fw-bold">
                    <?= $firstFilm->name = "Inception"?>
                </h5>
                <p class="card-text text-center">Regista: <?= $firstFilm->filmDirector = "Christopher Nolan" ?></p>
                <p class="card-text text-center">Voto: <?= $firstFilm->vote = "9.8" ?></p>
                <p class="card-text text-center">Anno: <?= $firstFilm->year = "2010" ?></p>
            </div>
        </div>
    </main>
</body>
</html>