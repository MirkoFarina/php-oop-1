<?php 

class Genres{
    public $genres_1;
    public $genres_2;
    public $genres_3;
    public $genres_4;
    public $genres_5;

    public function __construct($_genres_1, $_genres_2 = null,  $_genres_3 = null,  $_genres_4 = null,  $_genres_5 = null )
    {
        $this->genres_1 = $_genres_1;
        $this->genres_2 = $_genres_2;
        $this->genres_3 = $_genres_3;
        $this->genres_4 = $_genres_4;
        $this->genres_5 = $_genres_5;
    }
}