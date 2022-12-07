<?php 

class Movie {
    public $title;
    public $lenguage;
    public $rating;
    public $description;
    public $genres;
    public $poster = 'https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png';

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

    public function getDescription(){
        if(!$this->description) {
            return 'Description not found';
        }else {
            return 'Description: <br> ' . $this->description;
        }
    }

    public function rating($_rating = null) {
        $this->rating = $_rating;
    }

    public function getRating(){
       if(!$this->rating) {
        return 'No rated';
       }else {
        return 'Rating: ' . $this->rating . ' Stelle';
       }
    }

    public function getPoster($_poster = null){
        if(!$_poster) {
            return $this->poster;
        }else {
            return $this->poster = $_poster;
        }
    }
}