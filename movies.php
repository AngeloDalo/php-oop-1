<?php
/**
 * => all’interno della classe sono dichiarate delle variabili d’istanza
 * => all’interno della classe è definito un costruttore
 * => all’interno della classe è definito almeno un metodo
 * - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 */

class Movie 
{
    public $name;
    public $duration;
    public $year;
    public $language;
    public $budget;
    public $actors = [];
    public $genres = [];
    public $movie_directors;

    //COSTRUCT
    public function __construct(string $name, int $year, $actors, string $movie_directors)
    {
        $this->name = $name;
        $this->year = $year;
        $this->actors = $actors;
        $this->movie_directors = $movie_directors;
    }
    //SET
    public function setName($name)
    {
      $this->name = $name;
    }
    public function setDuration($duration)
    {
      $this->duration = $duration;
    }
    public function setYear($year)
    {
      $this->year = $year;
    }
    public function setLanguage($language)
    {
      $this->language = $language;
    }
    public function setBudget($budget)
    {
      $this->budget = $budget;
    }
    public function setMovie_directors($movie_directors)
    {
      $this->movie_directors = $movie_directors;
    }
    public function setActors($actors)
    {
      if (is_array($actors)) {
          $this->actors = $actors;
        }
    }
    public function setGenres($genres)
    {
      if (is_array($genres)) {
        $this->genres = $genres;
      }
    }

    //GET
    public function getName()
    {
      return $this->name;
    }
    public function getDuration()
    {
      return $this->duration;
    }
    public function getYear()
    {
      return $this->year;
    }
    public function getLanguage()
    {
      return $this->language;
    }
    public function getBudget()
    {
      return $this->budget;
    }
    public function getActors()
    {
      return $this->actors;
    }
    public function getGenres()
    {
      return $this->genres;
    }
    public function getMovie_director()
    {
      return $this->movie_directors;
    }
}

$movie_1 = new Movie('Interstellar', 2014, ['Matthew McConaughey', 'Anne Hathaway', 'Jessica Chastain', 'Michael Caine', 'John Lithgow'], 'Christopher Nolan');
$movie_1->setDuration(169);
$movie_1->setLanguage('en');
$movie_1->setBudget(165000000);
$movie_1->setGenres(['fantascienza', 'avventura', 'drammatico']);
$budget_film_1 = $movie_1->getBudget();
$duration_film_1 = $movie_1->getDuration();
$language_film_1 = $movie_1->getLanguage();
$nome_film_1 = $movie_1->getName();
$actors_film_1 = $movie_1->getActors();
$movie_director_film_1 = $movie_1->getMovie_director();
$genres_film_1 = $movie_1->getGenres();


$movie_2 = new Movie('Donnie Darko', 2001, ['Jake Gyllenhaal', 'Jena Malone', 'JDrew Barrymore', 'Mary McDonnell:', 'Maggie Gyllenhaal'], 'Richard Kelly');
$movie_2->setDuration(133);
$movie_2->setLanguage('en');
$movie_2->setBudget(10000000000);
$movie_2->setGenres(['fantascienza', 'thriller', 'drammatico']);
$budget_film_2 = $movie_2->getBudget();
$duration_film_2 = $movie_2->getDuration();
$language_film_2 = $movie_2->getLanguage();
$nome_film_2 = $movie_2->getName();
$actors_film_2 = $movie_2->getActors();
$movie_director_film_2 = $movie_2->getMovie_director();
$genres_film_2 = $movie_2->getGenres();

if ($budget_film_1 > $budget_film_2) {
    echo 'Film più costoso: '. $nome_film_1; 
} else {
    echo 'Film più costoso: '. $nome_film_2;  
}

//var_dump($movie_1);
//var_dump($movie_2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="div">
        <h1><?= $nome_film_1 ?></h1>
        <ul>
            <li>Budget: <?= $budget_film_1 ?> &euro;</li>
            <li>Duration: <?= $duration_film_1 ?> min</li>
            <li>Language: <?= $language_film_1 ?></li>
            <li>Movie Directors: <?= $movie_director_film_1 ?></li>
            <li>Actors: <?php
            foreach ($actors_film_1 as $actor) {
                echo $actor . ', ';
            }    
            ?> 
            </li>
            <li>Genres: <?php
            foreach ($genres_film_1 as $genre) {
                echo $genre . ', ';
            }
            ?> 
            </li>
        </ul>
    </div>
    <div class="div">
        <h1><?= $nome_film_2 ?></h1>
        <ul>
            <li>Budget: <?= $budget_film_2 ?> &euro;</li>
            <li>Duration: <?= $duration_film_2 ?> min</li>
            <li>Language: <?= $language_film_2 ?></li>
            <li>Movie Directors: <?= $movie_director_film_2 ?></li>
            <li>Actors: <?php
            foreach ($actors_film_2 as $actor) {
                echo $actor . ', ';
            }    
            ?> 
            </li>
            <li>Genres: <?php
            foreach ($genres_film_2 as $genre) {
                echo $genre . ', ';
            }
            ?> 
            </li>
        </ul>
    </div>
</body>
</html>
