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
        foreach ($actors as $actor) {
              $this->actors[] = $actor;
            }
        }
    }
    public function setGenres($genres)
    {
      if (is_array($genres)) {
        foreach ($genres as $genre) {
              $this->genres[] = $genre;
            }
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
      return $this->movie_director;
    }
}

$movie_1 = new Movie('Interstellar', 2014, ['Matthew McConaughey', 'Anne Hathaway', 'Jessica Chastain', 'Michael Caine', 'John Lithgow'], 'Christopher Nolan');
$movie_1->setDuration(169);
$movie_1->setLanguage('en');
$movie_1->setBudget(165000000);
$movie_1->setGenres(['fantascienza', 'avventura', 'drammatico']);


$movie_2 = new Movie('Donnie Darko', 2001, ['Jake Gyllenhaal', 'Jena Malone', 'JDrew Barrymore', 'Mary McDonnell:', 'Maggie Gyllenhaal'], 'Richard Kelly');
$movie_2->setDuration(133);
$movie_2->setLanguage('en');
$movie_2->setBudget(45000000);
$movie_2->setGenres(['fantascienza', 'thriller', 'drammatico']);

var_dump($movie_1);
var_dump($movie_2);
?>
