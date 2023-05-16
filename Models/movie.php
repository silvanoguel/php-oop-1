<?php

class Movie {
    public $title;
    public $year;
    public $language;
    public $img;

   

    // Costruttore
    function __construct($_title, $_year, $_language, $_img) {
        $this->title = $_title;
        $this->year = $_year;
        $this->language = $_language;
        $this->img = $_img;
    }

    // Metodi
    public function getMovieData() {
       return "Movie: {$this->title}; Year: {$this->year}; Language: {$this->language}";
    }
}