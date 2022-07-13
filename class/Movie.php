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

/* ----- GETTER - SETTER -----*/



    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of genres
     */ 
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Set the value of genres
     *
     * @return  self
     */ 
    public function setGenres($genres)
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * Get the value of runtimeMinutes
     */ 
    public function getRuntimeMinutes()
    {
        return $this->runtimeMinutes;
    }

    /**
     * Set the value of runtimeMinutes
     *
     * @return  self
     */ 
    public function setRuntimeMinutes($runtimeMinutes)
    {
        $this->runtimeMinutes = $runtimeMinutes;

        return $this;
    }

    /**
     * Get the value of directorsName
     */ 
    public function getDirectorsName()
    {
        return $this->directorsName;
    }

    /**
     * Set the value of directorsName
     *
     * @return  self
     */ 
    public function setDirectorsName($directorsName)
    {
        $this->directorsName = $directorsName;

        return $this;
    }

    /**
     * Get the value of plot
     */ 
    public function getPlot()
    {
        return $this->plot;
    }

    /**
     * Set the value of plot
     *
     * @return  self
     */ 
    public function setPlot($plot)
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Get the value of rating
     */ 
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set the value of rating
     *
     * @return  self
     */ 
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }
}

?>