<?php 

class Movie {
    public $title;
    public $lenguage;
    public $rating;
    public $description;
    public $genres;

    /**
     * @param String $_title
     * @param String $_lenguage
     * @param Genres $_genres
     * @param String $_description 
     */
    public function __construct($_title, $_lenguage, Genres $_genres, $_description = null)
    {
        $this->title = $_title;
        $this->lenguage = $_lenguage;
        $this->description = $_description;
        $this->genres = $_genres;
    }

    public function getRating($_rating){
        $this->rating = $_rating;
    }
}