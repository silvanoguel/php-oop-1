 <!-- 
    - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->

<?php

class Movie {
    public $title;
    public $year;
    public $language;

    // Costruttore
    function __construct($_title, $_year, $_language) {
        $this->title = $_title;
        $this->year = $_year;
        $this->language = $_language;
    }

    // Metodi
    public function getMovieData() {
       return "Movie: {$this->title}; Year: {$this->year}; Language: {$this->language}";
    }
}


$christopher_nolan = new Movie("Interstellar", "2014", "English");

$clint_eastwood = new Movie("Million Dollar Baby", "2004", "English");

echo ($christopher_nolan->getMovieData());
echo ("<br>");
echo ($clint_eastwood->getMovieData());