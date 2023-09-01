<?php
class Movie
{
    public $director;
    public $name;
    public $year;
    public $language;

    function __construct($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

$movie = new Movie('Fight Club');
echo $movie->get_name();

