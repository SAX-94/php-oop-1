<?php

class Movie
{
    public $title;
    public $genres;
    public $runtimeMinutes;
    public $directorsName;
    public $plot;
    public $rating;

    public function __construct(
        $_title,
        $_genres,
        $_runtimeMinutes,
        $_directorsName,
        $_plot,
        $_rating
    ) {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->runtimeMinutes = $_runtimeMinutes;
        $this->directorsName = $_directorsName;
        $this->plot = $_plot;
        $this->rating = $_rating;
    }

/* ----- SETTER -----*/

    public function getTitle()
    {
        return $this->title;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function getRuntimeMinutes()
    {
        return $this->runtimeMinutes;
    }

    public function getDirectorsName()
    {
        return $this->directorsName;
    }

    public function getPlot()
    {
        return $this->plot;
    }

    public function getRating()
    {
        return $this->rating;
    }
}

?>